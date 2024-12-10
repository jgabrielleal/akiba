<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'warnings';

    /**
     * The attributes that are mass assignable.
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team',
        'sender',
        'receiver',
        'message',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'team' => 'boolean',
        'sender' => 'integer',
        'receiver' => 'integer',
        'message' => 'string',
    ];

    /**
     * Pega o usuário que enviou o aviso e cria um relacionamento de muitos-para-um.
     * Get the user that sent the warning and create a many-to-one relationship.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender');
    }

    /**
     * Pega o usuário que recebeu o aviso e cria um relacionamento de muitos-para-um.
     * Get the user that received the warning and create a many-to-one relationship.
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
