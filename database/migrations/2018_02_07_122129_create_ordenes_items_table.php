<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden_id')->unsigned()->index();
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('cascade');
            $table->integer('cantidad');
            $table->string('descripcion', 250);
            $table->integer('descuento_id')->unsigned()->index();
            $table->foreign('descuento_id')->references('id')->on('descuentos')->onDelete('cascade');
            $table->integer('moneda_id')->unsigned()->index();
            $table->foreign('moneda_id')->references('id')->on('monedas')->onDelete('cascade');
            $table->decimal('monto', 6, 2);
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
        Schema::dropIfExists('ordenes_items');
    }
}
