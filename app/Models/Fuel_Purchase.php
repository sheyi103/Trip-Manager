<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Fuel_Purchase",
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
 *          property="milleage",
 *          description="milleage",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="fuel_guage_before",
 *          description="fuel_guage_before",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fuel_guage_after",
 *          description="fuel_guage_after",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="cost",
 *          description="cost",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="filling_station_gps_coordinates_long",
 *          description="filling_station_gps_coordinates_long",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="filling_station_gps_coordinates_lat",
 *          description="filling_station_gps_coordinates_lat",
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
class Fuel_Purchase extends Model
{
    use SoftDeletes;

    public $table = 'fuel_purchases';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'car_id',
        'milleage',
        'fuel_guage_before',
        'fuel_guage_after',
        'cost',
        'filling_station_gps_coordinates_long',
        'filling_station_gps_coordinates_lat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'car_id' => 'integer',
        'milleage' => 'float',
        'fuel_guage_before' => 'integer',
        'fuel_guage_after' => 'integer',
        'cost' => 'float',
        'filling_station_gps_coordinates_long' => 'float',
        'filling_station_gps_coordinates_lat' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'car_id' => 'required',
        'milleage' => 'required',
        'fuel_guage_before' => 'required',
        'fuel_guage_after' => 'required',
        'cost' => 'required',
        'filling_station_gps_coordinates_long' => 'required',
        'filling_station_gps_coordinates_lat' => 'required'
    ];

       /**
     * Get the car that owns the trip.
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
