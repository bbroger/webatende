<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'show_notification', 'play_sound', 'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that are dates
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at',
    ];

    public function calls()
    {
        return $this->hasMany(Call::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
