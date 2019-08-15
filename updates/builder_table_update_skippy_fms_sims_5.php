<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSims5 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->integer('genre_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->dropColumn('genre_id');
        });
    }
}
