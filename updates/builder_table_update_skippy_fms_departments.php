<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDepartments extends Migration
{
    public function up()
    {
        Schema::rename('skippy_fms_deparments', 'skippy_fms_departments');
    }
    
    public function down()
    {
        Schema::rename('skippy_fms_departments', 'skippy_fms_deparments');
    }
}
