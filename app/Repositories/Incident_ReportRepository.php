<?php

namespace App\Repositories;

use App\Models\Incident_Report;
use App\Repositories\BaseRepository;

/**
 * Class Incident_ReportRepository
 * @package App\Repositories
 * @version January 15, 2020, 3:52 am UTC
*/

class Incident_ReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_id',
        'remarks',
        'incident_image_path_1',
        'incident_image_path_2',
        'incident_image_path_3'
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
        return Incident_Report::class;
    }
}
