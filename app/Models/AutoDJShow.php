<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutoDJShow extends Model
{
    protected $table = 'autodj_show';

    protected $fillable = [
        'streamer',
        'name',
        'logo',
        'phrases',
    ];

    protected $casts = [
        'streamer' => 'integer',
        'name' => 'string',
        'logo' => 'string',
        'phrases' => 'array',
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
