<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDepartment3 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_department', function($table)
        {
            $table->integer('post_id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_department', function($table)
        {
            $table->dropColumn('post_id');
        });
    }
}
