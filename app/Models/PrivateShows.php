<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateShows extends Model
{

    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'private_shows';

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'streamer',
        'name',
        'logo',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'streamer' => 'integer',
        'name' => 'string',
        'logo' => 'string',
    ];

    /**
     * Pega o usuário que idicado como locutor do programa e cria um relacionamento de muitos-para-um.
     * Get the user that owns the show and create a many-to-one relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'streamer');
    }

    /**
     * Pega o modelo indicado na columa type e cria um relacionamento polimórfico muitos-para-um.
     * Get the model indicate in column type and create polymorphic many-to-one relationship.
     */
    public function onAir()
    {
        return $this->morphMany(OnAir::class, 'show');
    }
}
