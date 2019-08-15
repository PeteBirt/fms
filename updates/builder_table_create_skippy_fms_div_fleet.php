<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsDivFleet extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_div_fleet', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('divisions_id');
            $table->integer('fleet_id');
            $table->primary(['divisions_id','fleet_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_div_fleet');
    }
}
