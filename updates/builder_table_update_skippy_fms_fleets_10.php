<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsFleets10 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->string('fleet_img', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_fleets', function($table)
        {
            $table->text('fleet_img')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
