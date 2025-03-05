<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musics extends Model
{
    protected $table = 'musics';

    protected $fillable = [
        'requests',
        'name',
        'singer',
        'album',
        'production',
    ];

    protected $casts = [
        'requests' => 'integer',
        'name' => 'string',
        'singer' => 'string',
        'album' => 'string',
        'production' => 'string',
    ];

    public function listenerRequests()
    {
        return $this->hasMany(ListenerRequest::class, 'music');
    }
}
