<?php

namespace App\Repositories;

use App\Models\Fuel_Purchase;
use App\Repositories\BaseRepository;

/**
 * Class Fuel_PurchaseRepository
 * @package App\Repositories
 * @version January 21, 2020, 3:34 pm UTC
*/

class Fuel_PurchaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_id',
        'milleage',
        'fuel_guage_before',
        'fuel_guage_after',
        'cost',
        'filling_station_gps_coordinates_long',
        'filling_station_gps_coordinates_lat'
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
        return Fuel_Purchase::class;
    }
}
