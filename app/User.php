<?php

namespace Laravel52SS;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Laravel52SS\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Laravel52SS\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
