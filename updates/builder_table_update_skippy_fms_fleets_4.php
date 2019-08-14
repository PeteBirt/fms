<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsFleets4 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->increments('id');
            $table->string('fleet_name');
            $table->text('fleet_description');
            $table->dropColumn('temp');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->dropColumn('id');
            $table->dropColumn('fleet_name');
            $table->dropColumn('fleet_description');
            $table->integer('temp');
        });
    }
}
