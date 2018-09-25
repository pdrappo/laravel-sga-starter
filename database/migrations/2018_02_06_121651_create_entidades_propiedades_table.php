<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades_propiedades', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('entidad_id')->unsigned()->index();
            $table->foreign('entidad_id')->references('id')->on('entidades')->onDelete('cascade');

            $table->integer('propiedad_id')->unsigned()->index();
            $table->foreign('propiedad_id')->references('id')->on('propiedades')->onDelete('cascade');

            $table->string('valor');
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('entidades_propiedades');
    }
}
