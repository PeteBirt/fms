<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFms extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_', function($table)
        {
            $table->integer('dept_genre');
            $table->increments('id')->unsigned(false)->change();
            $table->string('dept_name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_', function($table)
        {
            $table->dropColumn('dept_genre');
            $table->increments('id')->unsigned()->change();
            $table->string('dept_name', 191)->change();
        });
    }
}
