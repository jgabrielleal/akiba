<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateShows extends Model
{

    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'private_shows';

    /**
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
     * Get the user that owns the show and create a many-to-one relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'streamer');
    }

    /**
     * Get the model indicate in column type and create polymorphic many-to-one relationship.
     */
    public function onAir()
    {
        return $this->morphMany(OnAir::class, 'show');
    }
}
