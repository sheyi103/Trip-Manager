<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Incident_Report",
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
 *          property="remarks",
 *          description="remarks",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="incident_image_path_1",
 *          description="incident_image_path_1",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="incident_image_path_2",
 *          description="incident_image_path_2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="incident_image_path_3",
 *          description="incident_image_path_3",
 *          type="string"
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
class Incident_Report extends Model
{
    use SoftDeletes;

    public $table = 'incident_reports';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'car_id',
        'remarks',
        'incident_image_path_1',
        'incident_image_path_2',
        'incident_image_path_3'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'car_id' => 'integer',
        'remarks' => 'string',
        'incident_image_path_1' => 'string',
        'incident_image_path_2' => 'string',
        'incident_image_path_3' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'car_id' => 'required',
        'remarks' => 'required'
    ];

      /**
     * Get the car for the  Incidents.
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
    
}
