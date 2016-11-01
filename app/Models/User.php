<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $displayName
 * @property string $fullName
 * @property string $password
 * @property integer $level
 * @property string $email
 * @property string $avatar
 * @property string $gender
 * @property string $address
 * @property string $phone
 * @property string $birthDay
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property News[] $news
 * @property Rating[] $ratings
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['displayName', 'fullName', 'password', 'level', 'email', 'avatar', 'gender', 'address', 'phone', 'birthDay', 'remember_token', 'created_at', 'updated_at', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings()
    {
        return $this->hasMany('App\Models\Rating');
    }
}
