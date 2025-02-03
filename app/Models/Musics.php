<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musics extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'musics';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'requests',
        'name',
        'singer',
        'album',
        'production',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'requests' => 'integer',
        'name' => 'string',
        'singer' => 'string',
        'album' => 'string',
        'production' => 'string',
    ];

    /**
     * Get the listener requests and create a one-to-many relationship.
     */
    public function listenerRequests()
    {
        return $this->hasMany(ListenerRequest::class, 'music');
    }
}
