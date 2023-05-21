<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries5 extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->text('image')->nullable();
        });
    }
}
