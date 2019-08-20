<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsPosts extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_posts', function($table)
        {
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_posts', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
