<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListenerRequests extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'listener_requests';

    /**
     * Os atributos que podem ser atribuídos em massa.
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'listener',
        'listener_ip',
        'on_air',
        'music',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'listener' => 'string',
        'listener_ip' => 'string',
        'on_air' => 'integer',
        'music' => 'integer',
    ];

    /**
     * Pega o modelo indicado na coluna on_air e cria um relacionamento muitos-para-um.
     * Get the model indicated in the on_air column and create a many-to-one relationship.
     */
    public function onAir()
    {
        return $this->belongsTo(OnAir::class, 'on_air');
    }

    /**
     * Pega a música que foi solicitada pelo ouvinte e cria um relacionamento de muitos-pra-um.
     * Get the song that was requested by the listener and create a many-to-one relationship.
     */
    public function music()
    {
        return $this->belongsTo(Musics::class, 'music');
    }
}
