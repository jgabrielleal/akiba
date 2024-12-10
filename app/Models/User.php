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
     * Nome da tabela associada com o modelo.
     * Name of the table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Os atributos que podem ser atribuídos em massa.
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
     * Os atributos que devem ser convertidos.
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
     * Os atributos que devem ser ocultados para serialização.
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Pega os atributos que devem ser convertidos.
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
     * Pega os programas privados do usuário e cria um relacionamento de um-para-muitos.
     * Get the private shows for the user and create a one-to-many relationship.
     */
    public function privateShows()
    {
        return $this->hasMany(PrivateShow::class, 'streamer');
    }

    /**
     * Pega os programas públicos do usuário e cria um relacionamento de um-para-muitos.
     * Get the public shows for the user and create a one-to-many relationship.
     */
    public function publicShows()
    {
        return $this->hasOne(PublicShow::class, 'streamer');
    }

    /**
     * Pega o usuário que é responsável pelo AutoDJ e cria um relacionamento de um-para-um.
     * Get the user that is responsible for the AutoDJ and create a one-to-one relationship.
     */
    public function autoDJShow()
    {
        return $this->hasOne(AutoDJShow::class, 'streamer');
    }

    /**
     * Pega os podcasts que o usuário é author e cria um relacionamento de um-para-muitos.
     * Get the podcasts for the user and create a one-to-many relationship.
     */
    public function podcats()
    {
        return $this->hasMany(Podcasts::class, 'author');
    }

    /**
     * Pega os posts do usuário e cria um relacionamento de um-para-muitos.
     * Get the posts of the user and create a one-to-many relationship.
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'author');
    }

    /**
     * Pega o usuário que foi indicado como autor e cria um relacionamento de muitos-para-um.
     * Get the user that is indicated as the author and create a many-to-one relationship.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    /**
     * Pega os eventos do usuário e cria um relacionamento de um-para-muitos.
     * Get the events of the user and create a one-to-many relationship.
     */
    public function events()
    {
        return $this->hasMany(Event::class, 'author');
    }

    /**
     * Pega os avisos que o usuário enviou e cria um relacionamento de um-para-muitos.
     * Get the warnings that the user sent and create a one-to-many relationship.
     */
    public function sentWarnings()
    {
        return $this->hasMany(Warning::class, 'sender');
    }

    /**
     * Pega os avisos que o usuário recebeu e cria um relacionamento de um-para-muitos.
     * Get the warnings that the user received and create a one-to-many relationship.
     */
    public function receivedWarnings()
    {
        return $this->hasMany(Warning::class, 'receiver');
    }

    /**
     * Pega os uploads no repositório que o usuário enviou e cria um relacionamento de um-para-muitos.
     * Get the uploads in the repository that the user sent and create a one-to-many relationship.
     */
    public function repository()
    {
        return $this->hasMany(Repository::class, 'author');
    }

    /**
     * Pega os eventos que o usuário está designado no calendario e cria um relacionamento de um-para-muitos.
     * Get the events that the user is assigned in the calendar and create a one-to-many relationship.
     */
    public function calendar()
    {
        return $this->hasMany(Calendar::class, 'responsible');
    }

    /**
     * Pega as batalhas de playlists atualizadas pelo usuário e cria um relacionamento de um-para-muitos.
     * Get the playlist battles updated by the user and create a one-to-many relationship.
     */
    public function playlistBattles()
    {
        return $this->hasMany(PlaylistBattle::class, 'updated_by');
    }

    /**
     * Pega as enquetes atualizadas pelo usuário e cria um relacionamento de um-para-muitos.
     * Get the polls updated by the user and create a one-to-many relationship.
     */
    public function polls()
    {
        return $this->hasMany(Poll::class, 'updated_by');
    }
}
