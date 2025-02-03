<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListenerRequests extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'listener_requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'listener',
        'listener_ip',
        'on_air',
        'music',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'listener' => 'string',
        'listener_ip' => 'string',
        'on_air' => 'integer',
        'music' => 'integer',
    ];

    /**
     * Get the model indicated in the on_air column and create a many-to-one relationship.
     */
    public function onAir()
    {
        return $this->belongsTo(OnAir::class, 'on_air');
    }

    /**
     * Get the song that was requested by the listener and create a many-to-one relationship.
     */
    public function music()
    {
        return $this->belongsTo(Musics::class, 'music');
    }
}
