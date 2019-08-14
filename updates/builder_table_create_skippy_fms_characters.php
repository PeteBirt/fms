<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsCharacters extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_characters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('char_name');
            $table->integer('rank_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_characters');
    }
}
