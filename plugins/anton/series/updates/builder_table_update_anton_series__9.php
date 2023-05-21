<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries9 extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->string('selected_episode', 10)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->integer('selected_episode')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
