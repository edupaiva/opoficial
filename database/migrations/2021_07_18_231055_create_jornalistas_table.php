<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornalistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornalistas', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nome',50);
            $table->string('sobrenome',50);
            $table->string('email',100)->unique();
            $table->string('senha',32);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jornalistas');
    }
}
