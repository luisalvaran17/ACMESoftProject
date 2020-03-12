<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->string('nombre_proveedor');
            $table->string('direccion', 60);
            $table->string('telefono', 15);
            $table->boolean('estado');
            $table->timestamps();
        });

        Schema::table('clientes', function (Blueprint $table) {
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
        Schema::dropIfExists('proveedores');
    }
}
