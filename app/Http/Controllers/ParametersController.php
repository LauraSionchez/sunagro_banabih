<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parameter;
use Illuminate\Support\Facades\DB;

class ParametersController extends Controller {

    //


    public function ut(Request $request) {
        if ($this->checkPermissions()) {
            if ($request->isMethod('post')) {
                //$request->valor=(float)$this->saveFloat($request->valor);
               // dd($request->valor);
                $this->validate($request, [
                        'valor' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
                            ], [
                        'valor.required' => __('EL Monto es Necesario'),
                        'valor.regex' => __('EL Monto debe ser numérico :value')
                       
                       
                    ]);
                DB::table('parameters')
                        ->where('name', '=', 'unidad_tributaria')
                        ->update(['value' => $request->valor]);
                \Session::flash('flash_message', __('Datos Registrados Exitosamente.'));
            }
            $valor = Parameter::where("name", "unidad_tributaria")->first();
            $valor = $valor != null ? ( (int) $valor->value) : 0;
            return view('parameters.ut', compact('valor'));
        } else {
            return array("status" => "0", "msg" => __("Solicitud Rechazada"));
        }
    }

}
