<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnAir extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'on_air';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'show_id',
        'show_type',
        'listener_requests_control',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'show_id' => 'integer',
        'show_type' => 'string',
        'listener_requests' => 'boolean',
    ];

    /**
     * Get the model indicate in column type and create the polymorphic many-to-one relationship.
     */
    public function show()
    {
        return $this->morphTo();
    }

    /**
     * Get the listener requests associated with this OnAir.
     */
    public function listenerRequests()
    {
        return $this->hasMany(ListenerRequest::class, 'on_air');
    }
}
