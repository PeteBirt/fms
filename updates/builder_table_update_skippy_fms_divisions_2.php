<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDivisions2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->integer('div_logo');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->dropColumn('div_logo');
        });
    }
}
