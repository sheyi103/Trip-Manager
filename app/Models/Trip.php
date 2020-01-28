<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Trip",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="start_trip_milleage",
 *          description="start_trip_milleage",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="start_trip_fuel_guage",
 *          description="start_trip_fuel_guage",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="start_trip_time",
 *          description="start_trip_time",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="start_trip_gps_coordinates_long",
 *          description="start_trip_gps_coordinates_long",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="start_trip_gps_coordinates_lat",
 *          description="start_trip_gps_coordinates_lat",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="passenger_name",
 *          description="passenger_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="end_trip_milleage",
 *          description="end_trip_milleage",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="end_trip_fuel_guage",
 *          description="end_trip_fuel_guage",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="end_trip_time",
 *          description="end_trip_time",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="end_trip_gps_coordinates_long",
 *          description="end_trip_gps_coordinates_long",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="end_trip_gps_coordinates_lat",
 *          description="end_trip_gps_coordinates_lat",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="toll_balance",
 *          description="toll_balance",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="remarks",
 *          description="remarks",
 *          type="string"
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
class Trip extends Model
{
    use SoftDeletes;

    public $table = 'trips';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'start_trip_milleage',
        'start_trip_fuel_guage',
        'start_trip_time',
        'start_trip_gps_coordinates_long',
        'start_trip_gps_coordinates_lat',
        'passenger_name',
        'end_trip_milleage',
        'end_trip_fuel_guage',
        'end_trip_time',
        'end_trip_gps_coordinates_long',
        'end_trip_gps_coordinates_lat',
        'toll_balance',
        'remarks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'start_trip_milleage' => 'float',
        'start_trip_fuel_guage' => 'integer',
        'start_trip_time' => 'string',
        'start_trip_gps_coordinates_long' => 'float',
        'start_trip_gps_coordinates_lat' => 'float',
        'passenger_name' => 'string',
        'end_trip_milleage' => 'float',
        'end_trip_fuel_guage' => 'integer',
        'end_trip_time' => 'string',
        'end_trip_gps_coordinates_long' => 'float',
        'end_trip_gps_coordinates_lat' => 'float',
        'toll_balance' => 'integer',
        'remarks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        
    ];

     /**
     * Get the user that owns the trip.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

     /**
     * Get the car that owns the trip.
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
    
}
