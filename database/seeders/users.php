<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new User();
        $role->username = 'admin';
        $role->password = bcrypt(md5('@dm1n'));
        $role->name = 'Miguel';
        $role->surname= 'Rivero';
        $role->email = 'miguelrivero52@gmail.com';
        $role->rol_id= 1;
        
        
        
        $role->save();
    }
}
