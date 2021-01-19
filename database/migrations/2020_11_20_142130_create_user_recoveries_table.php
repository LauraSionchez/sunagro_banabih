<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRecoveriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_recoveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestampTz('date_request')->nullable();
            $table->timestampTz('date_processed')->nullable();
            
            $table->string('token', 60)->nullable();
            $table->boolean('status', true);




            $table->foreign('user_id')->references('id')->on('users');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_recoveries');
    }

}
