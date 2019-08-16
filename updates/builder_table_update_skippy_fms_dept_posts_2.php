<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDeptPosts2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_dept_posts', function($table)
        {
            $table->integer('sim_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_dept_posts', function($table)
        {
            $table->dropColumn('sim_id');
        });
    }
}
