<?php namespace Anton\Series\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAntonSeries extends Migration
{
    public function up()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->string('slug', 10)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('anton_series_', function($table)
        {
            $table->integer('slug')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
