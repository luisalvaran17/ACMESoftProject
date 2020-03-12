<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_productos', function (Blueprint $table) {
            $table->bigIncrements('id_factura_producto');
            $table->integer('cantidad');
            $table->string('precio_venta', 50);
            $table->timestamps();
        });

        Schema::table('productos', function (Blueprint $table) {
            $table->bigInteger('id_producto')->unsigned()->after('precio_venta');
            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('restrict');
            $table->bigInteger('id_factura')->unsigned()->after('id_producto');
            $table->foreign('id_factura')->references('id_factura')->on('facturas')->onDelete('restrict');
            $table->bigInteger('id_user')->unsigned()->after('id_factura');
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
        Schema::dropIfExists('factura__productos');
    }
}
