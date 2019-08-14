<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsStaff extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_staff', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('div_id');
            $table->string('staff_post');
            $table->integer('char_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_staff');
    }
}
