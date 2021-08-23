<?php

namespace App\Repositories;

use App\Models\PostMeta;
use App\Repositories\BaseRepository;

/**
 * Class PostMetaRepository
 * @package App\Repositories
 * @version August 16, 2021, 7:59 am UTC
*/

class PostMetaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'key',
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
        return PostMeta::class;
    }
}
