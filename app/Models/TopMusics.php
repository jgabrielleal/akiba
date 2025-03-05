<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopMusics extends Model
{
    protected $table = 'top_musics';

    protected $fillable = [
        'avatar',
        'music',
        'requests',
        'production',
        'singer',
    ];

    protected $casts = [
        'avatar' => 'string',
        'music' => 'string',
        'requests' => 'integer',
        'production' => 'string',
        'singer' => 'string',
    ];
}
