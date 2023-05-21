<?php namespace Anton\Films\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonFilms2 extends Migration
{
    public function up()
    {
        Schema::table('anton_films_', function($table)
        {
            $table->text('image')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('anton_films_', function($table)
        {
            $table->text('image')->nullable(false)->change();
        });
    }
}
