<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author',
        'title',
        'cover',
        'publication',
        'fonts',
        'location',
        'date',
        'reactions',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'author' => 'integer',
        'title' => 'string',
        'cover' => 'string',
        'publication' => 'string',
        'fonts' => 'array',
        'location' => 'string',
        'date' => 'string',
        'reactions' => 'array',
    ];

    /**
     * Pega o usuário que foi indicado como autor e cria um relacionamento de muitos-para-um.
     * Get the user that is indicated as the author and create a many-to-one relationship.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
