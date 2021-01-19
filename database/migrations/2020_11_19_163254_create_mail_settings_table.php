<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('mail_settings', function (Blueprint $table) {
            $table->id();
            $table->string('mailer')->unique();
            $table->string('host')->unique();
            $table->string('port')->unique();
            $table->string('user_name')->unique();
            $table->string('name')->unique();
            $table->string('password')->unique();
            $table->string('encryption')->unique();




            //$table->timestamps();
        });

        DB::table('mail_settings')->insert([
            'mailer' => 'smtp',
            'host' => 'smtp.gmail.com',
            'port' => '587',
            'user_name' => 'marivero5000@gmail.com',
            'name' => 'Administrador',
            'password' => 'CAMPANITA.',
            'encryption' => 'tls',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('mail_settings');
    }

}
