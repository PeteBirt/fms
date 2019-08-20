<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSimDept9 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
