<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('entidad_tributaria_id')->unsigned()->index();
            $table->foreign('entidad_tributaria_id')->references('id')->on('entidades_tributarias')->onDelete('cascade');

            $table->integer('direccion_id')->unsigned()->index();
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('cascade');

            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('cuentas');
    }
}
