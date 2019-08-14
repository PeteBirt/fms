<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsFleetStaff extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_fleet_staff', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_fleet_staff');
    }
}
