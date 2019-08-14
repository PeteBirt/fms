<?php namespace Skippy\Fms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSkippyFmsGenre extends Migration
{
    public function up()
    {
        Schema::table('skippy_fms_genre', function($table)
        {
            $table->renameColumn('genre_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('skippy_fms_genre', function($table)
        {
            $table->renameColumn('id', 'genre_id');
        });
    }
}
