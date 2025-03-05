<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'author',
        'title',
        'cover',
        'sinopse',
        'reviews',
        'reactions',
    ];

    protected $casts = [
        'author' => 'integer',
        'title' => 'string',
        'cover' => 'string',
        'sinopse' => 'string',
        'reviews' => 'array',
        'reactions' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
