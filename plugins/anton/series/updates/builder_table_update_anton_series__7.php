<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries7 extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->text('image')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->string('image', 191)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
