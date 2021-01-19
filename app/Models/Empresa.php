<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresas";
    public $timestamps = false;
    

    protected $fillable = [
        'id_empresa',
        'razon',
        'rif'
    ];

    protected $primaryKey = 'id_empresa';
}
