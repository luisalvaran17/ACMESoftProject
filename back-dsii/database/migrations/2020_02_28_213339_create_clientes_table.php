<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('nombre_completo');
            $table->string('direccion', 60);
            $table->string('telefono', 15);
            $table->string('documento', 15);
            $table->boolean('sw_descuento');
            $table->boolean('estado');
            $table->timestamps();
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->bigInteger('id_tipo_documento')->unsigned()->after('telefono');
            $table->foreign('id_tipo_documento')->references('id_tipo_documento')->on('tipos_documetos')->onDelete('restrict');
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
        Schema::dropIfExists('clientes');
    }
}
