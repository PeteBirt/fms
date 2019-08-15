<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSims2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->dropColumn('fleet_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->integer('fleet_id');
        });
    }
}
