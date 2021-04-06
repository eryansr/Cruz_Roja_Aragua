<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula')->unique();
            $table->string('pasaporte')->nullable()->default('Ninguno');
            $table->integer('edad')->unsigned();
            $table->date('nacimiento');
            $table->integer('estado_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('parroquia_id')->unsigned();
            $table->integer('sanguineo_id')->unsigned();
            $table->integer('instruccion_id')->unsigned();
            $table->integer('profesion_id')->unsigned();
            $table->integer('ocupacion_id')->unsigned();
            $table->string('habitacion');
            $table->string('tel_movil');
            $table->string('tel_fijo');
            $table->string('tel_emergencia');
            $table->string('email')->unique();
            $table->string('alergia');
            $table->string('trabajo');
            $table->string('tel_trabajo');
            $table->integer('boys')->unsigned()->nullable()->default(0);
            $table->integer('girls')->unsigned()->nullable()->default(0);
            $table->string('discapacidad')->nullable();
            $table->integer('altura');
            $table->integer('peso');
            $table->string('talla_franela');
            $table->string('talla_pantalon');
            $table->string('talla_calzado');
            $table->string('experiencia')->nullable();
            $table->string('labores');
            $table->string('hobbies');
            $table->string('cruz_roja');
            $table->string('conocimiento');
            $table->string('tiempo');
            $table->string('cronica')->nullable()->default('Ninguno');
            $table->string('seguridad')->nullable()->default('Ninguno');
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
        Schema::dropIfExists('voluntarios');
    }
}
