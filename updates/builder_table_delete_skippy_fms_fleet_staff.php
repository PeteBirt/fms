<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSkippyFmsFleetStaff extends Migration
{
    public function up()
    {
        Schema::dropIfExists('skippy_fms_fleet_staff');
    }
    
    public function down()
    {
        Schema::create('skippy_fms_fleet_staff', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('fleet_id');
            $table->integer('staff_id');
            $table->integer('char_id');
        });
    }
}
