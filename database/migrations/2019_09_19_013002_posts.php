<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_post');
            $table->unsignedInteger('categorie');
            $table->foreign('categorie')->references('id')->on('categories');
            $table->string('nivel');
            $table->string('link');
            $table->text('description');
            $table->string('status');
            $table->float('nota', 8, 2);
            $table->string('autor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
