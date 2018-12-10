<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_usuario_freelance');
            $table->unsignedInteger('id_proyecto');
            $table->unsignedInteger('dias');  // Plazo
            $table->unsignedInteger('valor'); // a cobrar $MXN
            $table->string('descripcion');    // de la propuesta
            $table->string('status')->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propuestas');
    }
}
