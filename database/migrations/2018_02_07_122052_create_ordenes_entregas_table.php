<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_entregas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden_id')->unsigned()->index();
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade');

            $table->integer('entrega_tipo_id')->unsigned()->index();
            $table->foreign('entrega_tipo_id')->references('id')->on('entregas_tipos')->onDelete('cascade');

            $table->integer('transporte_id')->unsigned()->index();
            $table->foreign('transporte_id')->references('id')->on('transportes')->onDelete('cascade');

            $table->integer('direccion_id')->unsigned()->index();
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('cascade');

            $table->string('tracking_id');
            $table->timestamp('despachado')->nulleable();
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
        Schema::dropIfExists('ordenes_entregas');
    }
}
