<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit_articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kit_id')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('kit_id')
                  ->references('id')
                  ->on('kit')
                  ->onDelete('cascade');

            $table->foreign('id_producto')
                  ->references('id')
                  ->on('productos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kit_articulos');
    }
}
