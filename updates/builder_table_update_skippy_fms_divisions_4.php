<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDivisions4 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->text('div_info');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->dropColumn('div_info');
        });
    }
}
