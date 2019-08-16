<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSkippyFmsDeptPosts extends Migration
{
    public function up()
    {
        Schema::dropIfExists('skippy_fms_dept_posts');
    }
    
    public function down()
    {
        Schema::create('skippy_fms_dept_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('department_id');
            $table->integer('posts_id');
            $table->integer('sim_id');
        });
    }
}
