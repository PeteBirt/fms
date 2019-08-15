<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsGenre extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('genre_id');
            $table->text('genre_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_genre');
    }
}
