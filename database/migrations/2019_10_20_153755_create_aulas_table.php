<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id_aula');
            $table->string('name_aula');
            $table->unsignedInteger('course');
            $table->foreign('course')->references('id_course')->on('courses');
            $table->string('link');
            $table->text('description');
            $table->string('autor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
