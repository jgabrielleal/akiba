<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutoDJShow extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'autodj_show';

    /**
     * Os atributos que podem ser atribuídos em massa.
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'streamer',
        'name',
        'logo',
        'phrases',
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
        'phrases' => 'array',
    ];

    /**
     * Pega o usuário que foi indicado como locutor do auto DJ e cria um relacionamento de um-para-um.
     * Gets the user that was indicated as the host of the auto DJ and creates a one-to-one relationship.
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
