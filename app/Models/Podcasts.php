<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Podcasts extends Model
{

    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'podcasts';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author',
        'thumb',
        'season',
        'episode',
        'title',
        'summary',
        'description',
        'audio_address',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'author' => 'integer',
        'thumb' => 'string',
        'season' => 'integer',
        'episode' => 'integer',
        'title' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'audio_address' => 'string',
    ];

    /**
     * Get the user that is indicated as the author and create a many-to-one relationship.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
