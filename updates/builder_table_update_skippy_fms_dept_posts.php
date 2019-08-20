<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDeptPosts extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_dept_posts', function($table)
        {
            $table->renameColumn('dept_id', 'department_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_dept_posts', function($table)
        {
            $table->renameColumn('department_id', 'dept_id');
        });
    }
}
