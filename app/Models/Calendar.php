<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'author',
        'responsible',
        'hours',
        'event',
        'category',
    ];

    protected $casts = [
        'author' => 'integer',
        'responsible' => 'integer',
        'hours' => 'integer',
        'event' => 'string',
        'category' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
