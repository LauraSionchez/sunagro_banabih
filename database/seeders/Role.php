<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name_role = 'admin';
        $role->description = 'Administrator';
        $role->save();        
       
    }
}
