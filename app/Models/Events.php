<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author',
        'title',
        'cover',
        'publication',
        'fonts',
        'location',
        'date',
        'reactions',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'author' => 'integer',
        'title' => 'string',
        'cover' => 'string',
        'publication' => 'string',
        'fonts' => 'array',
        'location' => 'string',
        'date' => 'string',
        'reactions' => 'array',
    ];

    /**
     * Get the user that is indicated as the author and create a many-to-one relationship.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
