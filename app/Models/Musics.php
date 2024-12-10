<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musics extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'musics';


    /**
     * Os atributos que podem ser atribuídos em massa.
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'requests',
        'name',
        'singer',
        'album',
        'production',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'requests' => 'integer',
        'name' => 'string',
        'singer' => 'string',
        'album' => 'string',
        'production' => 'string',
    ];

    /**
     * Pega as pedidos musicais dos ouvintes e cria um relacionamento de um-para-muitos.
     * Get the listener requests and create a one-to-many relationship.
     */
    public function listenerRequests()
    {
        return $this->hasMany(ListenerRequest::class, 'music');
    }
}
