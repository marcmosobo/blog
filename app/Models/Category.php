<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version August 16, 2021, 8:00 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $posts
 * @property integer $parent_id
 * @property string $title
 * @property string $metaTitle
 * @property string $slug
 * @property string $content
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'parent_id',
        'title',
        'metaTitle',
        'slug',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'title' => 'string',
        'metaTitle' => 'string',
        'slug' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'parent_id' => 'required',
        'title' => 'nullable|string|max:75',
        'metaTitle' => 'nullable|string|max:100',
        'slug' => 'required|string|max:100',
        'content' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function posts()
    {
        return $this->belongsToMany(\App\Models\Post::class, 'post_categories');
    }
}
