<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSimDept8 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->dropPrimary(['sim_id','department_id']);
            $table->integer('sim_id')->nullable()->change();
            $table->integer('department_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->integer('sim_id')->nullable(false)->change();
            $table->integer('department_id')->nullable(false)->change();
            $table->primary(['sim_id','department_id']);
        });
    }
}
