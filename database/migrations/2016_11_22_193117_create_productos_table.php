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
            $table->increments('id');
            $table->string('clave');
            $table->string('clave_proveedor');
            $table->string('nombre_prod');
            $table->text('incluye_prod');
            $table->text('descripcion_prod');
            $table->string('marca');
            $table->string('link_prod');
            $table->string('tipo');
            $table->decimal('precio_prod',9,2);
            $table->string('logo_prod');
            $table->string('img1_prod');
            $table->string('img2_prod');
            $table->string('img3_prod');
            $table->string('img4_prod');
            $table->string('img5_prod');
            $table->string('flyer_prod');
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
        Schema::drop('productos');
    }
}
