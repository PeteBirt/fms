<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDepartments2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_departments', function($table)
        {
            $table->string('dept_genre', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_departments', function($table)
        {
            $table->integer('dept_genre')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
