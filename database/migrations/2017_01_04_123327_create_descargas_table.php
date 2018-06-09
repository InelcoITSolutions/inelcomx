<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descargas', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users');*/
            $table->string('email_usuario');
            $table->string('razon_social')->nullable();
            $table->string('nombre_comercial')->nullable();
            $table->string('rfc')->nullable();
            $table->string('contribuyente')->nullable();
            $table->string('telefono')->nullable();

            $table->integer('link_descarga_id')->unsigned();
            $table->foreign('link_descarga_id')
                  ->references('id')
                  ->on('link_descarga');

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
        Schema::dropIfExists('descargas');
    }
}
