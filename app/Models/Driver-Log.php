<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Driver-Log",
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
 *          property="journey_to",
 *          description="journey_to",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="journey_from",
 *          description="journey_from",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="initial_kilometer",
 *          description="initial_kilometer",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="final_kilometer",
 *          description="final_kilometer",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="total_kilometer_covered",
 *          description="total_kilometer_covered",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="petrol_position",
 *          description="petrol_position",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="petrol_purchases",
 *          description="petrol_purchases",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="oil_purchases",
 *          description="oil_purchases",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="officers_remarks_and_initials",
 *          description="officers_remarks_and_initials",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
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
class Driver-Log extends Model
{
    use SoftDeletes;

    public $table = 'drivers_log';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'journey_to',
        'journey_from',
        'initial_kilometer',
        'final_kilometer',
        'total_kilometer_covered',
        'petrol_position',
        'petrol_purchases',
        'oil_purchases',
        'officers_remarks_and_initials',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'journey_to' => 'string',
        'journey_from' => 'string',
        'initial_kilometer' => 'integer',
        'final_kilometer' => 'integer',
        'total_kilometer_covered' => 'integer',
        'petrol_position' => 'string',
        'petrol_purchases' => 'string',
        'oil_purchases' => 'string',
        'officers_remarks_and_initials' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'initial_kilometer' => 'required',
        'status' => 'required'
    ];

    
}
