<?php namespace Skippy\Fms\Models;
use Model;
/**
 * Model
 */
class Posts extends Model
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
    public $table = 'skippy_fms_posts';
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];
    public $belongsTo =[

      'department' =>[
        'Skippy\Fms\Models\Department',
        'table' => 'skippy_fms_sim_dept',
        'order' => 'dept_name'
      ]
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
