<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries8 extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->integer('selected_episode')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->dropColumn('selected_episode');
        });
    }
}
