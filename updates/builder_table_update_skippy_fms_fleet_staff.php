<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsFleetStaff extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_fleet_staff', function($table)
        {
            $table->integer('staff_id');
            $table->integer('char_id');
            $table->renameColumn('id', 'fleet_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_fleet_staff', function($table)
        {
            $table->dropColumn('staff_id');
            $table->dropColumn('char_id');
            $table->renameColumn('fleet_id', 'id');
        });
    }
}
