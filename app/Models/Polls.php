<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Polls extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'polls';

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'updated_by',
        'pool',
        'category',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'updated_by' => 'integer',
        'pool' => 'array',
        'category' => 'string',
    ];

    /**
     * Pega o usuário que atualizou a enquete e cria um relacionamento de muitos-para-um.
     * Get the user that updated the poll and create a many-to-one relationship.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
