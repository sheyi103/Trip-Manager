<?php

namespace App\Repositories;

use App\Models\Driver_Log;
use App\Repositories\BaseRepository;

/**
 * Class Driver_LogRepository
 * @package App\Repositories
 * @version January 14, 2020, 9:07 am UTC
*/

class Driver_LogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'car_id',
        'destination',
        'origin',
        'start_milleage',
        'end_milleage',
        'distance_covered',
        'petrol_level',
        'petrol_purchase',
        'oil_purchase',
        'officers_remarks',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Driver_Log::class;
    }
}
