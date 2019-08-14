<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSims11 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->string('sim_class', 191);
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->dropColumn('sim_class');
        });
    }
}
