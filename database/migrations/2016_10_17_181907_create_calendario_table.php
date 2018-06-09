<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria')->unsigned();
            $table->string('nombre_evento');
            $table->text('descripcion_evento');
            $table->string('numero_dias_evento',30);
            $table->string('nombre_dias_evento');
            $table->string('horario_evento',30);
            $table->string('duracion_evento',15);
            $table->string('link_landing_evento',100);
            $table->integer('cantidad_cupo');
            $table->string('expositor');
            $table->string('producto');
            $table->string('habilitado',2);
            $table->string('mes',30);
            $table->integer('anio');
            $table->string('etiqueta_url',30);
            $table->decimal('precio_evento',8,2);
            $table->string('estado',100);
            $table->string('ciudad',100);
            $table->string('lugar',100);
            $table->string('direccion');
            $table->integer('cp_evento');

            $table->foreign('id_categoria')
                  ->references('id')
                  ->on('categorias_eventos')
                  ->onDelete('cascade');
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
        Schema::drop('calendario');
    }
}
