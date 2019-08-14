<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSkippyFmsOrg extends Migration
{
    public function up()
    {
        Schema::dropIfExists('skippy_fms_org');
    }
    
    public function down()
    {
        Schema::create('skippy_fms_org', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('org_name', 191);
            $table->text('org_description');
            $table->string('org_slug', 191);
        });
    }
}
