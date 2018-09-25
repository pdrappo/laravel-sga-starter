<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades_vinculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entidad_id')->unsigned()->index();
            $table->foreign('entidad_id')->references('id')->on('entidades')->onDelete('cascade');
            $table->integer('vinculo_id')->unsigned()->index();
            $table->foreign('vinculo_id')->references('id')->on('entidades')->onDelete('cascade');
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
        Schema::dropIfExists('entidades_vinculos');
    }
}
