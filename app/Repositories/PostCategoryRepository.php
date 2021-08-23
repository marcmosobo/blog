<?php

namespace App\Repositories;

use App\Models\PostCategory;
use App\Repositories\BaseRepository;

/**
 * Class PostCategoryRepository
 * @package App\Repositories
 * @version August 16, 2021, 8:01 am UTC
*/

class PostCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'category_id'
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
        return PostCategory::class;
    }
}
