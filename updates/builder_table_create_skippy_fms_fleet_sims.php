<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsFleetSims extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_fleet_sims', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('fleet_id');
            $table->integer('sim_id');
            $table->primary(['fleet_id','sim_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_fleet_sims');
    }
}
