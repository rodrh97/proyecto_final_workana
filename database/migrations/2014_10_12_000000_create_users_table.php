<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('pais')->default('Mexico')->nullable;
            $table->string('descripcion_corta')->nullable();
            $table->string('descripcion_sobreMi')->nullable();
            $table->string('imagen')->nullable();
            $table->unsignedInteger('valor_hora')->nullable(); // valor entero, ejemplo 90 ($90.00 MXN)
            $table->rememberToken();
            $table->timestamps();
            $table->string('rol')->default('1');
            //$table->string('ruta_img')->default('1');
            //$table->string('ruta_img')->default('No hay foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
