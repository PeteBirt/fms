<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDivisions extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->string('div_name', 191);
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->dropColumn('div_name');
        });
    }
}
