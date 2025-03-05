<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

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

    protected $casts = [
        'email_verified_at' => 'datetime',
        'username' => 'string',
        'password' => 'hashed',
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

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'permissions' => 'array',
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function privateShows()
    {
        return $this->hasMany(PrivateShow::class, 'streamer');
    }

    public function publicShows()
    {
        return $this->hasOne(PublicShow::class, 'streamer');
    }

    public function autoDJShow()
    {
        return $this->hasOne(AutoDJShow::class, 'streamer');
    }

    public function podcats()
    {
        return $this->hasMany(Podcasts::class, 'author');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'author');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'author');
    }

    public function warnings()
    {
        return $this->hasMany(Warning::class, 'sender');
    }

    public function repository()
    {
        return $this->hasMany(Repository::class, 'author');
    }

    public function calendar()
    {
        return $this->hasMany(Calendar::class, 'responsible');
    }

    public function playlistBattles()
    {
        return $this->hasMany(PlaylistBattle::class, 'updated_by');
    }

    public function polls()
    {
        return $this->hasMany(Poll::class, 'updated_by');
    }

    public function tasksApplicant()
    {
        return $this->hasMany(Tasks::class, 'applicant');
    }

    public function tasksExecutor()
    {
        return $this->hasMany(Tasks::class, 'executor');
    }
}
