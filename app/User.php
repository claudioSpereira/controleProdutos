<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use KevinPijning\LaravelSearchable\Searchable;

class User extends Authenticatable
{
    use Searchable;

    use Notifiable;

    public $searchable = ['id',
	                    'name',
	                    'email',
	                    'created_at',
	                    'updated_at'];

    /**
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
