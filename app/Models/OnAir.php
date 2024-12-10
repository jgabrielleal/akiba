<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnAir extends Model
{
    /**
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'on_air';

    /**
     * Os atributos que podem ser atribuídos em massa.
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'show_id',
        'show_type',
        'listener_requests_control',
    ];

    /**
     * Os atributos que devem ser convertidos.
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'show_id' => 'integer',
        'show_type' => 'string',
        'listener_requests' => 'boolean',
    ];

    /**
     * Pega o modelo indicado na coluna type e cria um relacionamento polimórfico muitos-para-um.
     * Get the model indicate in column type and create the polymorphic many-to-one relationship.
     */
    public function show()
    {
        return $this->morphTo();
    }

    /**
     * Pega as solicitações de ouvintes associadas a este OnAir.
     * Get the listener requests associated with this OnAir.
     */
    public function listenerRequests()
    {
        return $this->hasMany(ListenerRequest::class, 'on_air');
    }
}
