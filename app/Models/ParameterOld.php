<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/*
 create table parameters(
    id integer(11) not null primary key auto_increment,
    name varchar(50) unique,
    description varchar(200),
    value varchar(20)
    );
INSERT INTO parameters(name, description, value) VALUES("allow_password_recovery", "Permite Que el Usuario Pueda Recuperar la Contraseña Por Medio del Correo Electronico", "1")



 */

class Parameter extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'id',
        'name',
        'description',
        'value'
    ];
}
