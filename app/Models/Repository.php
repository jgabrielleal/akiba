<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $table = 'repository';

    protected $fillable = [
        'author',
        'icon',
        'name',
        'download_address',
        'category',
    ];

    protected $casts = [
        'author' => 'integer',
        'icon' => 'string',
        'name' => 'string',
        'download_address' => 'string',
        'category' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
