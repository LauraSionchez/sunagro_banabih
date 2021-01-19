<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->boolean('active');
            $table->unsignedBigInteger('rol_id');



            $table->foreign('rol_id')->references('id')->on('rols');


            //$table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
            // $table->timestamps();
        });

        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make(md5('123456')),
            'name' => 'Miguel',
            'surname' => 'Rivero',
            'email' => 'miguelrivero52@gmail.com',
            'active' => '1',
            'rol_id' => '1',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
