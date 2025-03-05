<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'author',
        'title',
        'cover',
        'publication',
        'tags',
        'fonts',
        'reactions',
    ];

    protected $casts = [
        'author' => 'integer',
        'title' => 'string',
        'cover' => 'string',
        'publication' => 'string',
        'tags' => 'array',
        'fonts' => 'array',
        'reactions' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
