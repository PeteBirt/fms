<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSimDept6 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->integer('post_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->dropColumn('post_id');
        });
    }
}
