<?php namespace Skippy\Fms\Models;
use Model;
/**
 * Model
 */
class Sim extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
      /**
         * Scope a query to only include users of a given type.
         */
        public function scopeApplyGenre($query, $genre)
        {
            return $query->where('genre_', $genre);
        }
    /**
     * @var string The database table used by the model.
     */
    public $table = 'skippy_fms_sims';
    protected $jsonable = ['manifest'];
    /* Relations */
    public $belongsTo =[
      'fleet' =>[
        'Skippy\Fms\Models\Fleet',
        'table' => 'skippy_fms_fleet_sims',
        'order' => 'fleet_name'
      ],
      'genre' =>[
        'Skippy\Fms\Models\Genre',
        'table' => 'skippy_fms_sim_genre',
        'order' => 'genre_name'
      ]
    ];
    public $belongsToMany =[
      'departments' =>[
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
