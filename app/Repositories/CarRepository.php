<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version January 10, 2020, 12:53 am UTC
*/

class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'make',
        'model',
        'car_path',
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
        return Car::class;
    }
}
