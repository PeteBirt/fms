<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsDivisions3 extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->string('div_logo', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_divisions', function($table)
        {
            $table->integer('div_logo')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
