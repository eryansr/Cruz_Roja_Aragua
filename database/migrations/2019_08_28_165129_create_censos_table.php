<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('encuestador');
            $table->string('organizacion');
            $table->string('cedula', 8)->unique();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('lugar');
            $table->date('fecha');
            $table->integer('edad')->unsigned();
            $table->integer('telefono');
            $table->integer('ocupacion_id')->unsigned();
            $table->text('direccion');
            $table->integer('profesion_id')->unsigned();
            $table->integer('instruccion_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('parroquia_id')->unsigned();
            $table->string('piso');
            $table->string('techo');
            $table->integer('habitacion')->unsigned();
            $table->integer('wc')->unsigned();
            $table->string('agua');
            $table->string('rio');
            $table->string('vertedero');
            $table->string('industria');
            $table->string('terreno');
            $table->string('cria');
            $table->string('ingresos_familiar');
            $table->string('ingresos_adicional');
            $table->string('otros_ingresos');
            $table->text('observaciones1');
            $table->text('observaciones2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('censos');
    }
}
