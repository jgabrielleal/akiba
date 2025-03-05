<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Polls extends Model
{
    protected $table = 'polls';

    protected $fillable = [
        'updated_by',
        'pool',
        'category',
    ];

    protected $casts = [
        'updated_by' => 'integer',
        'pool' => 'array',
        'category' => 'string',
    ];

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
