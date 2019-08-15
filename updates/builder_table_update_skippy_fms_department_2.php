<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDepartment2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_department', function($table)
        {
            $table->integer('genre_id');
            $table->dropColumn('dept_genre');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_department', function($table)
        {
            $table->dropColumn('genre_id');
            $table->string('dept_genre', 10);
        });
    }
}
