<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'author',
        'title',
        'cover',
        'publication',
        'fonts',
        'location',
        'date',
        'reactions',
    ];

    protected $casts = [
        'author' => 'integer',
        'title' => 'string',
        'cover' => 'string',
        'publication' => 'string',
        'fonts' => 'array',
        'location' => 'string',
        'date' => 'string',
        'reactions' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
