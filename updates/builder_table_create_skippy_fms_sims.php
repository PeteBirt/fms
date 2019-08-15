<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsSims extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_sims', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('fleet_id');
            $table->string('sim_name');
            $table->string('sim_registry');
            $table->text('sim_description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_sims');
    }
}
