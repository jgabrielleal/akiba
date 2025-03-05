<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    protected $table = 'warnings';

    protected $fillable = [
        'sender',
        'receivers',
        'message',
    ];

    protected $casts = [
        'sender' => 'integer',
        'receivers' => 'array',
        'message' => 'string',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender');
    }
}