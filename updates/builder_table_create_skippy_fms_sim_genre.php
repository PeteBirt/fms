<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSkippyFmsSimGenre extends Migration
{
    public function up()
    {
        Schema::create('skippy_fms_sim_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('sim_id');
            $table->integer('genre_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('skippy_fms_sim_genre');
    }
}
