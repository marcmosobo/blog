<?php

namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\BaseRepository;

/**
 * Class TagRepository
 * @package App\Repositories
 * @version August 16, 2021, 8:01 am UTC
*/

class TagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'metaTitle',
        'slug',
        'content'
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
        return Tag::class;
    }
}
