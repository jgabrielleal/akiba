<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar';

    protected $fillable = [
        'author',
        'responsible',
        'hours',
        'event',
        'day_of_week',
        'category',
    ];

    protected $casts = [
        'author' => 'integer',
        'responsible' => 'integer',
        'hours' => 'datetime:H:i',
        'event' => 'string',
        'day_of_week' => 'string',
        'category' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible');
    }
}
