<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_calendario')->unsigned();
            $table->string('logo_coanfitrion');
            $table->string('estilos');
            $table->string('img_producto_banner',100);
            $table->string('img_producto',100);
            $table->text('parrafo1');
            $table->text('parrafo2');
            $table->string('link_temario');
            $table->string('frase');
            $table->string('dirigido1');
            $table->string('dirigido2');
            $table->string('dirigido3');
            $table->string('dirigido4');
            $table->string('img-dirigido');
            $table->string('title_desc1');
            $table->string('img_desc1');
            $table->text('cont_desc1');
            $table->string('title_desc2');
            $table->string('img_desc2');
            $table->text('cont_desc2');
            $table->string('title_desc3');
            $table->text('cont_desc3');
            $table->string('img_desc3');
            $table->text('codigo_mapa');
            $table->string('img_lugar_logo');
            $table->string('link_webinar');
            $table->timestamps();
            $table->foreign('id_calendario')
                  ->references('id')
                  ->on('calendario')
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
        Schema::drop('landing');
    }
}
