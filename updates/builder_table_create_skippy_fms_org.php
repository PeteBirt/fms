<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsOrg extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_org', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('org_id')->unsigned();
            $table->string('org_name');
            $table->text('org_description');
            $table->string('org_slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_org');
    }
}
