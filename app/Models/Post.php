<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Post
 * @package App\Models
 * @version August 23, 2021, 7:15 am UTC
 *
 * @property \App\Models\User $author
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $postComments
 * @property \Illuminate\Database\Eloquent\Collection $postMetas
 * @property \Illuminate\Database\Eloquent\Collection $tags
 * @property integer $author_id
 * @property integer $parent_id
 * @property string $title
 * @property string $metaTitle
 * @property string $slug
 * @property string $summary
 * @property boolean $published
 * @property string|\Carbon\Carbon $publishedAt
 * @property string $content
 */
class Post extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'author_id',
        'parent_id',
        'title',
        'metaTitle',
        'slug',
        'summary',
        'published',
        'publishedAt',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'parent_id' => 'integer',
        'title' => 'string',
        'metaTitle' => 'string',
        'slug' => 'string',
        'summary' => 'string',
        'published' => 'boolean',
        'publishedAt' => 'datetime',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_id' => 'required',
        'parent_id' => 'required',
        'title' => 'nullable|string|max:191',
        'metaTitle' => 'nullable|string|max:191',
        'slug' => 'nullable|string|max:191',
        'summary' => 'nullable|string',
        'published' => 'required|boolean',
        'publishedAt' => 'nullable',
        'content' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function author()
    {
        return $this->belongsTo(\App\Models\User::class, 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class, 'post_categories');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function postComments()
    {
        return $this->hasMany(\App\Models\PostComment::class, 'post_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function postMetas()
    {
        return $this->hasMany(\App\Models\PostMeta::class, 'post_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, 'post_tags');
    }
}
