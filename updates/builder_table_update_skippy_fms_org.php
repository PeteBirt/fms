<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsOrg extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_org', function($table)
        {
            $table->increments('org_id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_org', function($table)
        {
            $table->increments('org_id')->unsigned()->change();
        });
    }
}
