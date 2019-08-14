<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDepartment extends Migration
{
    public function up()
    {
        Schema::rename('skippy_fms_departments', 'skippy_fms_department');
    }
    
    public function down()
    {
        Schema::rename('skippy_fms_department', 'skippy_fms_departments');
    }
}
