<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class User
 * @package App\Models
 * @version August 16, 2021, 7:58 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $posts
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $mobile
 * @property string $email
 * @property string $password
 * @property string|\Carbon\Carbon $lastLogin
 * @property string $intro
 * @property string $profile
 * @property boolean $email_verified
 * @property boolean $password_changed
 * @property string $remember_token
 */
class User extends Model implements
\Illuminate\Contracts\Auth\Authenticatable
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'mobile',
        'email',
        'password',
        'lastLogin',
        'intro',
        'profile',
        'email_verified',
        'password_changed',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'password' => 'string',
        'lastLogin' => 'datetime',
        'intro' => 'string',
        'profile' => 'string',
        'email_verified' => 'boolean',
        'password_changed' => 'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstName' => 'nullable|string|max:191',
        'middleName' => 'nullable|string|max:191',
        'lastName' => 'nullable|string|max:191',
        'mobile' => 'nullable|string|max:191',
        'email' => 'nullable|string|max:191',
        'password' => 'required|string|max:191',
        'lastLogin' => 'nullable',
        'intro' => 'nullable|string',
        'profile' => 'nullable|string',
        'email_verified' => 'required|boolean',
        'password_changed' => 'required|boolean',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function posts()
    {
        return $this->hasMany(\App\Models\Post::class, 'author_id');
    }

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
