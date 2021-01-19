<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->string('value');
            //$table->timestamps();
        });

        DB::table('parameters')->insert([
            'name' => 'allow_password_recovery',
            'description' => '',
            'value' => '1',
        ]);
        
        DB::table('parameters')->insert([
            'name' => 'password_security_level',
            'description' => '',
            'value' => '3',
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('parameters');
    }

}
