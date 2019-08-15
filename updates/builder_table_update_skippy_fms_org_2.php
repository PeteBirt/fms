<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsOrg2 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_org', function($table)
        {
            $table->renameColumn('org_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_org', function($table)
        {
            $table->renameColumn('id', 'org_id');
        });
    }
}
