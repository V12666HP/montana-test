<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries2 extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->integer('seasons')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->dropColumn('seasons');
        });
    }
}
