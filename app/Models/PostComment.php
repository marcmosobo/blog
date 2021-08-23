<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PostComment
 * @package App\Models
 * @version August 16, 2021, 8:00 am UTC
 *
 * @property \App\Models\Post $post
 * @property integer $post_id
 * @property integer $parent_id
 * @property string $title
 * @property boolean $published
 * @property string|\Carbon\Carbon $published_at
 * @property string $content
 */
class PostComment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'post_comments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'post_id',
        'parent_id',
        'title',
        'published',
        'published_at',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'post_id' => 'integer',
        'parent_id' => 'integer',
        'title' => 'string',
        'published' => 'boolean',
        'published_at' => 'datetime',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'post_id' => 'required',
        'parent_id' => 'required',
        'title' => 'nullable|string|max:191',
        'published' => 'required|boolean',
        'published_at' => 'nullable',
        'content' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class, 'post_id');
    }
}
