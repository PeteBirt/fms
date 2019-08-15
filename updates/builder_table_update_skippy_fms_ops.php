<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsOps extends Migration
{
    public function up()
    {
        Schema::rename('skippy_fms_divisions', 'skippy_fms_ops');
        Schema::table('skippy_fms_ops', function($table)
        {
            $table->string('ops_name', 191);
            $table->string('ops_logo', 191);
            $table->renameColumn('division_info', 'ops_info');
            $table->dropColumn('division_name');
            $table->dropColumn('division_logo');
        });
    }
    
    public function down()
    {
        Schema::rename('skippy_fms_ops', 'skippy_fms_divisions');
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->dropColumn('ops_name');
            $table->dropColumn('ops_logo');
            $table->renameColumn('ops_info', 'division_info');
            $table->string('division_name', 191);
            $table->string('division_logo', 191);
        });
    }
}
