<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsDeptPosts extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_dept_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('dept_id');
            $table->integer('posts_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_dept_posts');
    }
}
