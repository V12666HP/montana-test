<?php namespace Anton\Films\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAntonFilms extends Migration
{
    public function up()
    {
        Schema::create('anton_films_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('anton_films_');
    }
}
