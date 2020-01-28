<?php

namespace App\Repositories;

use App\Models\Workshop;
use App\Repositories\BaseRepository;

/**
 * Class WorkshopRepository
 * @package App\Repositories
 * @version January 22, 2020, 11:24 am UTC
*/

class WorkshopRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Workshop::class;
    }
}
