<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutoDJShow extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'autodj_show';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'streamer',
        'name',
        'logo',
        'phrases',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'streamer' => 'integer',
        'name' => 'string',
        'logo' => 'string',
        'phrases' => 'array',
    ];

    /**
     * Gets the user that was indicated as the host of the auto DJ and creates a one-to-one relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'streamer');
    }

    /**
     * Get the model indicate in column type and create polymorphic many-to-one relationship.
     */
    public function onAir()
    {
        return $this->morphMany(OnAir::class, 'show');
    }
}
