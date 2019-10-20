<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id_course');
            $table->string('name_course');
            $table->unsignedInteger('categorie');
            $table->foreign('categorie')->references('id')->on('categories');
            $table->string('carga_horaria');
            $table->string('nivel');
            $table->text('description');
            $table->string('status');
            $table->float('nota', 8, 2);
            $table->string('autor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
