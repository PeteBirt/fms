<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsPosts extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('post_name', 191);
            $table->integer('department_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_posts');
    }
}
