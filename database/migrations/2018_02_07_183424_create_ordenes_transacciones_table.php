<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_trasacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden_id')->unsigned()->index();
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade');
            $table->integer('transaccion_id')->unsigned()->index();
            $table->foreign('transaccion_id')->references('id')->on('transacciones')->onDelete('cascade');
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
        Schema::dropIfExists('ordenes_trasacciones');
    }
}
