<?php namespace Skippy\Fms\Models;

use Model;

/**
 * Model
 */
class Department extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'skippy_fms_department';

    /* Relations */

    public $belongsTo =[

      'genre' =>[

        'Skippy\Fms\Models\Genre',

        'table' => 'skippy_fms_sim_genre',

        'order' => 'genre_name'

      ]
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
