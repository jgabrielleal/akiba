<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopMusics extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'top_musics';

    /**
     * Os atributos que podem ser atribuídos em massa
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'music',
        'requests',
        'production',
        'singer',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'avatar' => 'string',
        'music' => 'string',
        'requests' => 'integer',
        'production' => 'string',
        'singer' => 'string',
    ];
}
