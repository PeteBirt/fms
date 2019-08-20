<?php namespace Skippy\Fms\Models;

use Model;

/**
 * Model
 */
class Postlist extends Model
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
    public $table = 'skippy_fms_sim_dept';
    /**
     * @var array Guarded fields
     */
    protected $guarded = [];
    /**
     * @var array Validation rules
     */
     public $belongsTo = [
         'posts' => [
           'Skippy\Fms\Models\Posts',
           'table' => 'skippy_fms_posts',
           'order' => 'post_name'
         ],
         'sim' =>[

           'Skippy\Fms\Models\Sim',
           'table' => 'skippy_fms_sim',
           'order' => 'sim_name'
         ]
     ];
     public $belongsToMany =[

       'departments' =>[
         'Skippy\Fms\Models\Department',
         'table' => 'skippy_fms_sim_dept',
         'order' => 'dept_name'

       ]
     ];
    public $rules = [
    ];
}
