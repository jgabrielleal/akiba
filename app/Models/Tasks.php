<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'applicant',
        'executor',
        'limit',
        'task',
        'completed',
    ];

    protected $casts = [
        'limit' => 'datetime',
        'completed' => 'boolean',
    ];

    public function applicant()
    {
        return $this->belongsTo(User::class, 'applicant');
    }

    public function executor()
    {
        return $this->belongsTo(User::class, 'executor');
    }
}