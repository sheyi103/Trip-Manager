<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Car",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="make",
 *          description="make",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="model",
 *          description="model",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="plate_number",
 *          description="plate_number",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="car_image",
 *          description="car_image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="boolean"
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
class Car extends Model
{
    use SoftDeletes;

    public $table = 'cars';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'make',
        'model',
        'plate_number',
        'car_image',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'make' => 'string',
        'model' => 'string',
        'plate_number' => 'integer',
        'car_image' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'make' => 'required',
        'model' => 'required',
        'plate_number' => 'required',
        'status' => 'required'
    ];
/**
      /**
     * Get the car record associated with the user.
     */
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     * Get the Maintainers for the  Car.
     */
    public function maintainances()
    {
        return $this->hasMany('App\Models\Maintainance');
    }

     /**
     * Get the Maintainers for the  Car.
     */
    public function fuelpurchases()
    {
        return $this->hasMany('App\Models\Fuel_Purchase');
    }

     /**
     * Get the Maintainers for the  Car.
     */
    public function incidentreports()
    {
        return $this->hasMany('App\Models\Incident_Report');
    }
    
}
