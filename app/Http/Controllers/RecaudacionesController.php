<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoImpuesto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Recaudacion;
use App\Models\Parameter;
use App\Models\Empresa;
use Carbon\Carbon;

class RecaudacionesController extends Controller {

    public $Codigo = null;
    public $Token = null;
    public $TokenQuery = null;
    public $FechaToken = null;
    public $TokenExist = false;

    public function index(Request $request) {


        if ($this->checkPermissions()) {
            $Impuestos = TipoImpuesto::where("mostrar", 1)->get()->toArray();

            $TipoImpuesto[''] = __('Seleccione...');
            $list_imp = '';
            $validationTax = [];
            foreach ($Impuestos as $value) {
                $TipoImpuesto[$value['id']] = $value['descripcion'];
                $list_imp .= $value['id'] . ',';

                if ($value['incrementable'] == 1) {
                    $validationTax[$value['id']]['max'] = 9999;
                } else {
                    $validationTax[$value['id']]['max'] = $value['unidad_tributaria'];
                }
                $validationTax[$value['id']]['min'] = $value['unidad_tributaria'];
            }
            $list_imp = substr($list_imp, 0, strlen($list_imp) - 1);
            $empresa_name = '';
            $empresa_rif = '';
            $empresa_id = '';

            $codigo = '';

            $ut = Parameter::where("name", 'unidad_tributaria')->select('value')->first();
            $ut = $this->showFloat($ut->value);

            if ($request->isMethod('post')) {
                if ($request->type == 'search') {
                    $codigo = $request->codigo;
                    $this->validate($request, [
                        'codigo' => 'required|numeric|min:1|max:99999999',
                            ], [
                        'codigo.required' => __('EL Código es Necesario'),
                        'codigo.numeric' => __('EL Código debe ser numérico'),
                        'codigo.min' => __('Código Errado'),
                        'codigo.max' => __('El Código no Debe Exeder de 8 Dígitos')
                    ]);

                    $empresa = Empresa::find($request->codigo);
                    if ($empresa != null) {
                        $empresa_name = $empresa->razon;
                        $empresa_rif = $empresa->rif;
                        $empresa_id = $empresa->id_empresa;
                    } else {
                        \Session::flash('flash_message', __('Empresa No Encontrada.'));
                    }
                }

                if ($request->type == 'save') {
                    if ($request->tipo_impuesto != null) {


                        $this->validate($request, [
                            'tipo_impuesto' => 'required|numeric|in:' . $list_imp,
                            'cant_unidad_tributaria' => 'required|numeric|min:' . $validationTax[$request->tipo_impuesto]['min'] . '|max:' . $validationTax[$request->tipo_impuesto]['max'],
                            'codigo.required' => 'EL código es Necesario',
                            'codigo' => 'required|numeric',
                                ], ['tipo_impuesto.required' => __('EL Tipo de Impuesto es Necesario'),
                            'tipo_impuesto.numeric' => __('EL tipo Impuesto debe ser numérico'),
                            'tipo_impuesto.in' => __('EL Tipo Impuesto No Es Válido'),
                            'cant_unidad_tributaria.required' => __('La Cantidad de Unidad Tributaria es Necesaria'),
                            'cant_unidad_tributaria.numeric' => __('La Cantidad de Unidad Tributaria debe Ser numérico'),
                            'cant_unidad_tributaria.min' => __('La Cantidad de Unidad Tributaria debe Ser Mayor o Igual a ' . $validationTax[$request->tipo_impuesto]['min']),
                            'cant_unidad_tributaria.max' => __('La Cantidad de Unidad Tributaria debe Ser Menor o Igual a ' . $validationTax[$request->tipo_impuesto]['max']),
                            'codigo.required' => __('No ha Seleccionado la Empresa'),
                            'codigo.numeric' => __('No ha Seleccionado la Empresa'),
                        ]);


                        $Recaudaciones = new Recaudacion();
                        $Recaudaciones->empresa_id = $request->codigo;
                        $Recaudaciones->tipo_impuesto_id = $request->tipo_impuesto;
                        $Recaudaciones->fecha_registro = date('Y-m-d H:i:s');
                        $Recaudaciones->monto_unidad_tributaria = $this->saveFloat($ut);
                        $Recaudaciones->cantidad_unidad_tributaria = $request->cant_unidad_tributaria;
                        $Recaudaciones->save();


                        \Session::flash('flash_message', __('Datos Registrados Exitosamente.'));
                    }
                }

                //dd($empresa_name);
            }

            // dd($TipoImpuesto);
            return view('recaudaciones.viewRegisterTax', compact('TipoImpuesto', 'ut', 'empresa_name', 'empresa_rif', 'empresa_id', 'codigo', 'Impuestos'));
        } else {
            return array("status" => "0", "msg" => __("Solicitud Rechazada"));
        }
    }

    public function get($codigo = null, $rif = null) {
        $this->Token = Str::random(60);
        $this->TokenQuery = "'" . $this->Token . "'";
        $this->Codigo = $codigo;
        $this->FechaToken = "'" . date('Y-m-d H:i:s') . "'";

        if (is_numeric($codigo)) {


            //Check if Exists Any Query Execute
            $Check = Recaudacion::where("token", "!=", "''")->where('anulado', '=', DB::raw('false'))->where('pagado', '=', DB::raw('false'))->where('empresa_id', '=', DB::raw($this->Codigo))->select("token", "fecha_token")
                    ->groupBy([ "token", "fecha_token"])
                    ->first();

            //if Exist any token request
            if ($Check != null) {
                $start = new Carbon($Check->fecha_token);
                $end = new Carbon(date('Y-m-d H:i:s'));
                $diff = (int) $start->diff($end)->format('%y%m%d%h%i');

                if ($diff > 5) {
                    //Remove Token Old
                    $UpdateRecaudacion = DB::table('recaudaciones')->where('anulado', '=', DB::raw('false'))->where('pagado', '=', DB::raw('false'))->where('empresa_id', '=', DB::raw($this->Codigo))
                            ->update([ 'token' => "''", 'fecha_token' => DB::raw('cast(null as date)')]);
                } else {
                    $this->TokenExist = true;
                }
            }

            if ($this->TokenExist == false) {
                //Set Token To Tax Available
                $UpdateRecaudacion = DB::table('recaudaciones')->where('anulado', '=', DB::raw('false'))->where('pagado', '=', DB::raw('false'))->where('empresa_id', '=', DB::raw($this->Codigo))
                        ->update([ 'token' => $this->Token, 'fecha_token' => $this->FechaToken]);
                if ($UpdateRecaudacion > 0) {

                    //Select Tax To Pay
                    $impuestos = TipoImpuesto::leftjoin('recaudaciones', function ($join) {
                                $join->on('recaudaciones.tipo_impuesto_id', '=', 'tipos_impuestos.id');
                                $join->on('recaudaciones.empresa_id', '=', DB::raw($this->Codigo));


                                $join->on('recaudaciones.token', '=', DB::raw($this->TokenQuery));
                                $join->on('recaudaciones.anulado', '=', DB::raw('false'));
                                $join->on('recaudaciones.pagado', '=', DB::raw('false'));
                            })
                            ->select("tipos_impuestos.id", "tipos_impuestos.descripcion")
                            ->selectRaw('SUM( COALESCE(recaudaciones.monto_unidad_tributaria, 0)*COALESCE(recaudaciones.cantidad_unidad_tributaria, 0)) as monto')
                            ->groupBy([ "tipos_impuestos.id", "tipos_impuestos.descripcion"])
                            ->get();
                    $resp['status'] = 1;
                    $resp['codigo'] = $this->Codigo;
                    $resp['msg'] = __("Impuestos Capturados");
                    $resp['token'] = $this->Token;
                    $resp['cant_tax'] = $UpdateRecaudacion;
                    $resp['tax'] = $impuestos;
                } else {
                    $resp['status'] = 0;
                    $resp['codigo'] = $this->Codigo;
                    $resp['msg'] = __("La Empresa no Posee Impuestos a Pagar");
                    $resp['token'] = null;
                    $resp['cant_tax'] = $UpdateRecaudacion;
                    $resp['tax'] = array();
                }
            } else {
                $resp['status'] = 0;
                $resp['codigo'] = $this->Codigo;
                $resp['msg'] = __("Ya Existe Una Solicitud Activa");
                $resp['token'] = null;
                $resp['cant_tax'] = 0;
                $resp['tax'] = array();
            }
        } else {
            $resp['status'] = 0;
            $resp['codigo'] = $codigo;
            $resp['msg'] = __("Código de Empresa Errado");
            $resp['token'] =null;
            $resp['cant_tax'] =0;
            $resp['tax'] = [];
        }



        return $resp;
    }

    public function set(Request $request) {

        $tax_pay = [];
        if (is_array($request->tax)) {
            foreach ($request->tax as $key => $value) {
                if ($value == 'ok') {
                    $tax_pay[] = $key;
                }
            }



            if (count($tax_pay) > 0) {
                $UpdateRecaudacion = DB ::table('recaudaciones')
                        ->where('anulado', '=', DB::raw('false'))
                        ->where('pagado', '=', DB::raw('false'))
                        ->where('empresa_id', '=', DB::raw($request->codigo))
                        ->where('token', '=', $request->token)
                        ->whereIn('tipo_impuesto_id', $tax_pay)
                        ->update([ 'token' => DB::raw('cast(null as text)'),
                    'fecha_token' => DB::raw('cast(null as date)'),
                    'pagado' => DB::raw('true'),
                    'fecha_pago' => "'" . date('Y-m-d H:i:s') . "'",
                    'referencia_pago' => $request->ref
                ]);

                $UpdateRecaudacion = DB:: table('recaudaciones')
                        ->where('empresa_id', '=', DB::raw($request->codigo))
                        ->where('token', '=', $request->token)
                        ->update([ 'token' => DB::raw('cast(null as text)'),
                    'fecha_token' => DB::raw('cast(null as date)')
                ]);
            }
        }
        return true;
    }

}
