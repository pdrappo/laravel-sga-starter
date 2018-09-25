<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden_tipo_id')->unsigned()->index();
            $table->foreign('orden_tipo_id')->references('id')->on('ordenes_tipos')->onDelete('cascade');
            $table->string('referencia', 50);

            $table->integer('cuenta_id')->unsigned()->index();
            $table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');

            $table->integer('forma_pago_id')->unsigned()->index();
            $table->foreign('forma_pago_id')->references('id')->on('formas_pago')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('observaciones')->nullable();
            $table->timestamp('vencimiento')->useCurrent();
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
        Schema::dropIfExists('ordenes');
    }
}
