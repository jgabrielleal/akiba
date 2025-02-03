<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'warnings';

    /**
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
     * Get the user that sent the warning and create a many-to-one relationship.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender');
    }

    /**
     * Get the user that received the warning and create a many-to-one relationship.
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
