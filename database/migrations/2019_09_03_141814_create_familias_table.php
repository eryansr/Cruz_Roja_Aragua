<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('censo_id')->unsigned();
            $table->string('cedulaf', 8)->unique();
            $table->string('nombref');
            $table->string('apellidof');
            $table->integer('edadf')->unsigned();
            $table->string('sexof');
            $table->string('civilf');
            $table->string('filiacion');
            $table->string('instruccionf');
            $table->string('ocupacionf');
            $table->string('enfermedad');
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
        Schema::dropIfExists('familias');
    }
}
