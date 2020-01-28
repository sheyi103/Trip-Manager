<?php

namespace App\Repositories;

use App\Models\Maintainance;
use App\Repositories\BaseRepository;

/**
 * Class MaintainanceRepository
 * @package App\Repositories
 * @version January 22, 2020, 11:26 am UTC
*/

class MaintainanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_id',
        'workshop_id',
        'milleage',
        'maintainance_cost',
        'maintainance_gps_coordinates_long',
        'maintainance_gps_coordinates_lat'
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
        return Maintainance::class;
    }
}
