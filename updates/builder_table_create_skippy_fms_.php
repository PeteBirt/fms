<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFms extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('dept_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_');
    }
}
