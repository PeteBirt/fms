<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsCharacters extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_characters', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('char_name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_characters', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('char_name', 191)->change();
        });
    }
}
