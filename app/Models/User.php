<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'permissions',
        'name',
        'nickname',
        'avatar',
        'email',
        'birthday',
        'city',
        'state',
        'bibliography',
        'social_networks',
        'likes',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'username' => 'string',
        'password' => 'string',
        'permissions' => 'array',
        'name' => 'string',
        'nickname' => 'string',
        'avatar' => 'string',
        'email' => 'string',
        'birthday' => 'date',
        'city' => 'string',
        'state' => 'string',
        'bibliography' => 'string',
        'social_networks' => 'array',
        'likes' => 'array',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'permissions' => 'array',
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the private shows for the user and create a one-to-many relationship.
     */
    public function privateShows()
    {
        return $this->hasMany(PrivateShow::class, 'streamer');
    }

    /**
     * Get the public shows for the user and create a one-to-many relationship.
     */
    public function publicShows()
    {
        return $this->hasOne(PublicShow::class, 'streamer');
    }

    /**
     * Get the user that is responsible for the AutoDJ and create a one-to-one relationship.
     */
    public function autoDJShow()
    {
        return $this->hasOne(AutoDJShow::class, 'streamer');
    }

    /**
     * Get the podcasts for the user and create a one-to-many relationship.
     */
    public function podcats()
    {
        return $this->hasMany(Podcasts::class, 'author');
    }

    /**
     * Get the posts of the user and create a one-to-many relationship.
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'author');
    }

    /**
     * Get the user that is indicated as the author and create a many-to-one relationship.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    /**
     * Get the events of the user and create a one-to-many relationship.
     */
    public function events()
    {
        return $this->hasMany(Event::class, 'author');
    }

    /**
     * Get the warnings that the user sent and create a one-to-many relationship.
     */
    public function sentWarnings()
    {
        return $this->hasMany(Warning::class, 'sender');
    }

    /**
     * Get the uploads in the repository that the user sent and create a one-to-many relationship.
     */
    public function repository()
    {
        return $this->hasMany(Repository::class, 'author');
    }

    /**
     * Get the events that the user is assigned in the calendar and create a one-to-many relationship.
     */
    public function calendar()
    {
        return $this->hasMany(Calendar::class, 'responsible');
    }

    /**
     * Get the playlist battles updated by the user and create a one-to-many relationship.
     */
    public function playlistBattles()
    {
        return $this->hasMany(PlaylistBattle::class, 'updated_by');
    }

    /**
     * Get the polls updated by the user and create a one-to-many relationship.
     */
    public function polls()
    {
        return $this->hasMany(Poll::class, 'updated_by');
    }
}
