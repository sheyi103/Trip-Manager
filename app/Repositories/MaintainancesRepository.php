<?php

namespace App\Repositories;

use App\Models\Maintainances;
use App\Repositories\BaseRepository;

/**
 * Class MaintainancesRepository
 * @package App\Repositories
 * @version January 15, 2020, 3:49 am UTC
*/

class MaintainancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_id',
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
        return Maintainances::class;
    }
}
