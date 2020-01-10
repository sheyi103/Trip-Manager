<?php

namespace App\Repositories;

use App\Models\Driver-Log;
use App\Repositories\BaseRepository;

/**
 * Class Driver-LogRepository
 * @package App\Repositories
 * @version January 10, 2020, 12:57 am UTC
*/

class Driver-LogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Driver-Log::class;
    }
}
