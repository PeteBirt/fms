<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsDivisions extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_divisions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('division_name');
            $table->string('division_logo');
            $table->text('division_info');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_divisions');
    }
}
