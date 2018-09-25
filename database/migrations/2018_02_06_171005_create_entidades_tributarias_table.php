<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesTributariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades_tributarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social');
            $table->string('nombre_alternativo');

            $table->integer('documento_tipo_id')->unsigned()->index();
            $table->foreign('documento_tipo_id')->references('id')->on('documentos_tipos')->onDelete('cascade');

            $table->bigInteger('documento')->index()->unique();

            $table->integer('direccion_id')->unsigned()->index();
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('cascade');

            $table->integer('tributo_tipo_id')->unsigned()->index();
            $table->foreign('tributo_tipo_id')->references('id')->on('tributos_tipos')->onDelete('cascade');

            $table->integer('forma_pago_id')->unsigned()->index();
            $table->foreign('forma_pago_id')->references('id')->on('formas_pago')->onDelete('cascade');

            $table->integer('descuento_id')->unsigned()->index();
            $table->foreign('descuento_id')->references('id')->on('descuentos')->onDelete('cascade');

            $table->boolean('activo')->default(true);
            $table->boolean('apb')->default(false);
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
        Schema::dropIfExists('entidades_tributarias');
    }
}
