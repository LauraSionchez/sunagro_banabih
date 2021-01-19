<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Recaudacion extends Model {

    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "id",
        "empresa_id",
        "tipo_impuesto_id",
        "fecha_registro",
        "monto_unidad_tributaria",
        "cantidad_unidad_tributaria",
        "pagado",
        "fecha_pago",
        "referencia_pago",
        "token",
        "fecha_token",
        "anulado",
        "descripcion_anulado"
    ];
    protected $table = "recaudaciones";

    public function getTipoImpuesto() {
        return $this->hasMany('App\Models\TipoImpuesto', 'tipo_impuesto_id');
    }

}
