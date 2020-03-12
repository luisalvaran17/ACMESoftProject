<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto');
            $table->string('descripcion');
            $table->string('precio_compra', 50);
            $table->string('precio_venta', 50);
            $table->string('cantidad_existencia', 30);
            $table->boolean('estado');
            $table->timestamps();
        });

        Schema::table('productos', function (Blueprint $table) {
            $table->bigInteger('id_proveedor')->unsigned()->after('cantidad_existencia');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores')->onDelete('restrict');
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
        Schema::dropIfExists('productos');
    }
}
