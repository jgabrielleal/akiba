<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListenerRequests extends Model
{
    protected $table = 'listener_requests';

    protected $fillable = [
        'listener',
        'listener_ip',
        'on_air',
        'music',
    ];

    protected $casts = [
        'listener' => 'string',
        'listener_ip' => 'string',
        'on_air' => 'integer',
        'music' => 'integer',
    ];

    public function onAir()
    {
        return $this->belongsTo(OnAir::class, 'on_air');
    }

    public function music()
    {
        return $this->belongsTo(Musics::class, 'music');
    }
}
