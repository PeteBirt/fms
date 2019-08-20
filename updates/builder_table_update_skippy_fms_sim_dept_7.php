<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSimDept7 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->renameColumn('post_id', 'posts_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->renameColumn('posts_id', 'post_id');
        });
    }
}
