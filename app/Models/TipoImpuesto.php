<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImpuesto extends Model {

    use HasFactory;

    protected $table = "tipos_impuestos";
    
    
    protected $fillable = [
		'id', 
		'descripcion', 
		'unidad_tributaria', 
		'incrementable', 
		'mostrar'
	];
    
    public function getRecaudaciones() {
        return $this->hasMany('App\Models\Recaudacion', 'tipo_impuesto_id');
    }

}
