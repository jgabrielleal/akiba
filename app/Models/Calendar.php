<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author',
        'responsible',
        'hours',
        'event',
        'category',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'author' => 'integer',
        'responsible' => 'integer',
        'hours' => 'integer',
        'event' => 'string',
        'category' => 'string',
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
