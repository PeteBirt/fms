<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSimDept extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->dropPrimary(['sim_id','dept_id']);
            $table->renameColumn('dept_id', 'department_id');
            $table->primary(['sim_id','department_id']);
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->dropPrimary(['sim_id','department_id']);
            $table->renameColumn('department_id', 'dept_id');
            $table->primary(['sim_id','dept_id']);
        });
    }
}
