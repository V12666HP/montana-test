<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAntonSeries extends Migration
{
    public function up()
    {
        Schema::create('anton_series_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('anton_series_');
    }
}
