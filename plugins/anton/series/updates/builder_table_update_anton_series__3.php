<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries3 extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->text('seasons')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->integer('seasons')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
