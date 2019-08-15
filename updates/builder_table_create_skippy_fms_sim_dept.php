<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsSimDept extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_sim_dept', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('sim_id');
            $table->integer('dept_id');
            $table->primary(['sim_id','dept_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_sim_dept');
    }
}
