<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ventas_id')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->integer('kit_id')->unsigned();
            $table->integer('cantidad');
            $table->decimal('precio',9,2);
            $table->timestamps();

            $table->foreign('ventas_id')
                  ->references('id')
                  ->on('ventas');

            $table->foreign('id_producto')
                  ->references('id')
                  ->on('productos');

            $table->foreign('kit_id')
                  ->references('id')
                  ->on('kit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas_articulos');
    }
}
