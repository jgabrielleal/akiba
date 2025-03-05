<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicShows extends Model
{
    protected $table = 'public_shows';

    protected $fillable = [
        'streamer',
        'name',
        'logo',
    ];

    protected $casts = [
        'streamer' => 'integer',
        'name' => 'string',
        'logo' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'streamer');
    }

    public function onAir()
    {
        return $this->morphMany(OnAir::class, 'show');
    }
}
