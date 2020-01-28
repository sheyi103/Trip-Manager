<?php

namespace App\Repositories;

use App\Models\Trip;
use App\Repositories\BaseRepository;

/**
 * Class TripRepository
 * @package App\Repositories
 * @version January 21, 2020, 3:10 pm UTC
*/

class TripRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Trip::class;
    }
}
