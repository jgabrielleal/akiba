<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListenerOfMonth extends Model
{
    protected $table = 'listener_of_month';

    protected $fillable = [
        'avatar',
        'listener',
        'address',
        'requests',
        'show',
    ];

    protected $casts = [
        'avatar' => 'string',
        'listener' => 'string',
        'address' => 'string',
        'requests' => 'integer',
        'show' => 'string',
    ];
}
