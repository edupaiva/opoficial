<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('jornalista_id')->nullable(false)->unsigned();
            $table->foreign('jornalista_id')->references('id')->on('jornalistas');

            $table->integer('tiponoticia_id')->nullable(false)->unsigned();
            $table->foreign('tiponoticia_id')->references('id')->on('tipo_noticias');
            
            $table->string('titulo')->nullable(false);
            $table->text('descricao')->nullable(false);
            $table->text('corponoticia')->nullable(false);
            $table->string('imagemdestaque',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('noticias');
    }
}
