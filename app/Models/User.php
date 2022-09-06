<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //--------------------------Relations----------------------------------------------------

    public function senders() // returns users who have sent request
    {
        return $this->hasMany(Request::class, 'sender_id');
    }

    public function receivers() // returns users who have sent request
    {
        return $this->hasMany(Request::class, 'receiver_id');
    }

    public function firstConnection() // returns connection 1 from connections
    {
        return $this->hasMany(Connection::class, 'connection_1');
    }

    public function secondConnection() // returns connection 2 from connections
    {
        return $this->hasMany(Connection::class, 'connection_2');
    }

    public function getAllConnections()
    {
        return $this->firstConnection->merge($this->secondConnection);
    }

    //--------------------------Queries----------------------------------------------------

    public static function getSuggestions($loggedInUser) // Returns Suggestions as Instructed In The Documentation
    {
        return User::whereDoesntHave('senders', function ($query) use ($loggedInUser) {
            $query->where('receiver_id', '=', $loggedInUser)
                ->orWhere('sender_id', '=', $loggedInUser);
        })
            ->whereDoesntHave('receivers', function ($query) use ($loggedInUser) {
                $query->where('receiver_id', '=', $loggedInUser)
                    ->orWhere('sender_id', '=', $loggedInUser);
            })
            ->whereDoesntHave('firstConnection', function ($query) use ($loggedInUser) {
                $query->where('connection_1', '=', $loggedInUser)
                    ->orWhere('connection_2', '=', $loggedInUser);
            })
            ->whereDoesntHave('secondConnection', function ($query) use ($loggedInUser) {
                $query->where('connection_1', '=', $loggedInUser)
                    ->orWhere('connection_2', '=', $loggedInUser);
            })
            ->get();
    }
}
