<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_noticias', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('jornalista_id')->nullable(false)->unsigned();
            $table->foreign('jornalista_id')->references('id')->on('jornalistas');
            $table->string('classificacao',20)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_noticias');
    }
}
