<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Maintainance",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="car_id",
 *          description="car_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="workshop_id",
 *          description="workshop_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="milleage",
 *          description="milleage",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="maintainance_cost",
 *          description="maintainance_cost",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="maintainance_gps_coordinates_long",
 *          description="maintainance_gps_coordinates_long",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="maintainance_gps_coordinates_lat",
 *          description="maintainance_gps_coordinates_lat",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Maintainance extends Model
{
    use SoftDeletes;

    public $table = 'maintainances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'car_id',
        'workshop_id',
        'milleage',
        'maintainance_cost',
        'maintainance_gps_coordinates_long',
        'maintainance_gps_coordinates_lat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'car_id' => 'integer',
        'workshop_id' => 'integer',
        'milleage' => 'float',
        'maintainance_cost' => 'float',
        'maintainance_gps_coordinates_long' => 'float',
        'maintainance_gps_coordinates_lat' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'car_id' => 'required',
        'workshop_id' => 'required',
        'milleage' => 'required',
        'maintainance_cost' => 'required'
    ];

     /**
     * Get the role for the  user.
     */
    public function workshop()
    {
        return $this->belongsTo('App\Models\Workshop');
    }
      /**
     * Get the car that owns the trip.
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }

     
}
