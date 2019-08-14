<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsStaff extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_staff', function($table)
        {
            $table->renameColumn('div_id', 'fleet_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_staff', function($table)
        {
            $table->renameColumn('fleet_id', 'div_id');
        });
    }
}
