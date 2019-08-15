<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsFleets extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_fleets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fleet_name');
            $table->text('fleet_description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_fleets');
    }
}
