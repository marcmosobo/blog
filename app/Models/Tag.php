<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tag
 * @package App\Models
 * @version August 16, 2021, 8:01 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $posts
 * @property string $title
 * @property string $metaTitle
 * @property string $slug
 * @property string $content
 */
class Tag extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tags';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'title' => 'nullable|string|max:191',
        'metaTitle' => 'nullable|string|max:191',
        'slug' => 'required|string|max:191',
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
        return $this->belongsToMany(\App\Models\Post::class, 'post_tags');
    }
}
