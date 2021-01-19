<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecudacionesGuias extends Model
{
    use HasFactory;

    protected $table = "recaudaciones_guias";
    public $timestamps = false;

    protected $fillable = [
		'id', 
		'recaudaciones_id', 
		'guia_id', 
		'nro_guia', 
		'fecha_emision'
	];
/*
    public function getRecaudaciones() {
        return $this->hasMany('App\Models\Recaudaciones', 'recaudaciones_id');
    }
 * */
 
    protected $primaryKey = 'id';


}
