<?php namespace Skippy\Fms\Models;

use Model;

/**
 * Model
 */
class Fleet extends Model
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
    public $table = 'skippy_fms_fleets';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $belongsTo =[

      'division' =>[

        'Skippy\Fms\Models\Division',

        'table' => 'skippy_fms_div_fleet',

        'order' => 'div_name'

      ],
    ];
    public $hasMany = [
    'sims' => 'Skippy\Fms\Models\Sim'
];
}
