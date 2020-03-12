<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id_factura');
            $table->string('subtotal', 20);
            $table->string('descuento', 20);
            $table->string('valor_neto', 20);
            $table->timestamps();
        });

        Schema::table('facturas', function (Blueprint $table) {
            $table->bigInteger('id_cliente')->unsigned()->after('valor_neto');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('restrict');
            $table->bigInteger('id_user')->unsigned()->after('estado');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
