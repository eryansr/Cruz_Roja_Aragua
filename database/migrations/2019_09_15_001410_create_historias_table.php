<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad')->unsigned();
            $table->integer('cedula')->unique();
            $table->string('habitacion');
            $table->date('nacimiento');
            $table->integer('tel_movil');
            $table->integer('tel_fijo');
            $table->integer('tel_emergencia');
            $table->string('email');
            $table->string('alergia');
            $table->string('trabajo');
            $table->string('tel_trabajo');
            $table->string('altura');
            $table->string('peso');
            $table->integer('sanguineo_id')->unsigned();
            $table->string('discapacidad')->nullable();
            $table->text('observaciones1');
            $table->string('nombree');
            $table->string('apellidoe');
            $table->string('especializacion');
            $table->string('consulta');
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
        Schema::dropIfExists('historias');
    }
}
