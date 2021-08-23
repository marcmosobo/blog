<?php

namespace App\Repositories;

use App\Models\PostComment;
use App\Repositories\BaseRepository;

/**
 * Class PostCommentRepository
 * @package App\Repositories
 * @version August 16, 2021, 8:00 am UTC
*/

class PostCommentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'parent_id',
        'title',
        'published',
        'published_at',
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
        return PostComment::class;
    }
}
