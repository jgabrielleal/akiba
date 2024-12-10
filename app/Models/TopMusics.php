<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopMusics extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'top_musics';

    /**
     * The attributes that are mass assignable.
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
     * Os atributos que devem ser convertidos.
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
