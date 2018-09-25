<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas_entregas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cuenta_id')->unsigned()->index();
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');

            $table->integer('transporte_id')->unsigned()->index();
            $table->foreign('transporte_id')->references('id')->on('transportes')->onDelete('cascade');

            $table->integer('entrega_tipo_id')->unsigned()->index();
            $table->foreign('entrega_tipo_id')->references('id')->on('entregas_tipos')->onDelete('cascade');

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
        Schema::dropIfExists('cuentas_entregas');
    }
}
