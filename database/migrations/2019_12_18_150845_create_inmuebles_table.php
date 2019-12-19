<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            //descripcion
            $table->string('titulo',150)->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->string('portada',150)->nullable();

            //ubicacion
            $table->double('lat')->nullable();
            $table->double('lon')->nullable();

            //caracteristicas
            $table->double('costo')->nullable(false);
            $table->enum('tipo',['casa','departamento'])->nullable(false);
            $table->integer('habitaciones')->nullable(false);
            $table->double('area')->nullable(false);
            $table->integer('estacionamiento')->nullable(false);
            $table->integer('baños')->nullable(false);
            $table->integer('pisos')->nullable(false);
            $table->string('estatus')->default('inactivo');

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
        Schema::dropIfExists('inmuebles');
    }
}
