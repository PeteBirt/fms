<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDeparments extends Migration
{
    public function up()
    {
        Schema::rename('skippy_fms_', 'skippy_fms_deparments');
        Schema::table('skippy_fms_deparments', function($table)
        {
            $table->string('dept_name')->change();
        });
    }
    
    public function down()
    {
        Schema::rename('skippy_fms_deparments', 'skippy_fms_');
        Schema::table('skippy_fms_', function($table)
        {
            $table->string('dept_name', 191)->change();
        });
    }
}
