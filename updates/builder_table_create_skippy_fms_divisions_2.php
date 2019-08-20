<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsDivisions2 extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_divisions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_divisions');
    }
}
