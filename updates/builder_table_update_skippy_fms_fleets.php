<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsFleets extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->string('fleet_type');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->dropColumn('fleet_type');
        });
    }
}
