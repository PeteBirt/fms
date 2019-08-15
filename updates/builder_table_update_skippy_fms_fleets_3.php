<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsFleets3 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->integer('temp');
            $table->dropColumn('id');
            $table->dropColumn('fleet_name');
            $table->dropColumn('fleet_description');
            $table->dropColumn('fleet_type');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->dropColumn('temp');
            $table->increments('id')->unsigned();
            $table->string('fleet_name', 191);
            $table->text('fleet_description')->nullable();
            $table->string('fleet_type', 191);
        });
    }
}
