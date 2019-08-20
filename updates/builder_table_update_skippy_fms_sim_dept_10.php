<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSimDept10 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->integer('postlist_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sim_dept', function($table)
        {
            $table->dropColumn('postlist_id');
        });
    }
}
