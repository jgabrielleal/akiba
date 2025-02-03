<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistBattle extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'playlist_battle';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'updated_by',
        'image',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'updated_by' => 'integer',
        'image' => 'string',
    ];

    /**
     * Get the user that updated the playlist battle and create a many-to-one relationship.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
