<?php

namespace Andresgarzonj\Baserepo\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const RESOURCE_KEY = 'users';

    /**
     *
     * This is only a sample model to recreate the real scenario
     *
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}