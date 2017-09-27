<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DBUsers extends Authenticatable
{
    use Notifiable;

    protected $table = 'day_users';


    protected $fillable = [
        'id', 'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $incrementing = false;

    use SoftDeletes;
}

