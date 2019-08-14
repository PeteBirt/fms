<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsFleets2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->text('fleet_description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->text('fleet_description')->nullable(false)->change();
        });
    }
}
