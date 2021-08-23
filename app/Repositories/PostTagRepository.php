<?php

namespace App\Repositories;

use App\Models\PostTag;
use App\Repositories\BaseRepository;

/**
 * Class PostTagRepository
 * @package App\Repositories
 * @version August 16, 2021, 8:02 am UTC
*/

class PostTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'tag_id'
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
        return PostTag::class;
    }
}
