<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsSims10 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->string('sim_role', 191);
            $table->dropColumn('manifest');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_sims', function($table)
        {
            $table->dropColumn('sim_role');
            $table->text('manifest')->nullable();
        });
    }
}
