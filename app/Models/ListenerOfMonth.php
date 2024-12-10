<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListenerOfMonth extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'listener_of_month';

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'listener',
        'address',
        'requests',
        'show',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'avatar' => 'string',
        'listener' => 'string',
        'address' => 'string',
        'requests' => 'integer',
        'show' => 'string',
    ];
}
