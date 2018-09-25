<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTributosTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tributos_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('iva_tipo_id')->unsigned()->index();
            $table->foreign('iva_tipo_id')->references('id')->on('ivas_tipos')->onDelete('cascade');
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
        Schema::dropIfExists('tributos_tipos');
    }
}
