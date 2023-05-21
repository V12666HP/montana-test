<?php namespace Anton\Films\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonFilms3 extends Migration
{
    public function up()
    {
        Schema::table('anton_films_', function($table)
        {
            $table->text('video')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('anton_films_', function($table)
        {
            $table->dropColumn('video');
        });
    }
}
