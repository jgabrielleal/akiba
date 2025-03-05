<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnAir extends Model
{
    protected $table = 'on_air';

    protected $fillable = [
        'show_id',
        'show_type',
        'listener_requests_control',
    ];

    protected $casts = [
        'show_id' => 'integer',
        'show_type' => 'string',
        'listener_requests' => 'boolean',
    ];

    public function show()
    {
        return $this->morphTo();
    }

    public function listenerRequests()
    {
        return $this->hasMany(ListenerRequest::class, 'on_air');
    }
}
