<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSkippyFmsStaff extends Migration
{
    public function up()
    {
        Schema::dropIfExists('skippy_fms_staff');
    }
    
    public function down()
    {
        Schema::create('skippy_fms_staff', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('fleet_id');
            $table->string('staff_post', 191);
            $table->integer('char_id');
        });
    }
}
