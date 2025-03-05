<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Podcasts extends Model
{
    protected $table = 'podcasts';

    protected $fillable = [
        'author',
        'thumb',
        'season',
        'episode',
        'title',
        'summary',
        'description',
        'audio_address',
    ];

    protected $casts = [
        'author' => 'integer',
        'thumb' => 'string',
        'season' => 'integer',
        'episode' => 'integer',
        'title' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'audio_address' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
