<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistBattle extends Model
{
    protected $table = 'playlist_battle';

    protected $fillable = [
        'updated_by',
        'image',
    ];

    protected $casts = [
        'updated_by' => 'integer',
        'image' => 'string',
    ];

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
