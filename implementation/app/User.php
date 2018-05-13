<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'user_name', 'email', 'password', 'date_of_birth', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function teacher(){
        return $this->hasOne('App\Teacher', 'user_id');
    }

    public function student(){
        return $this->hasOne('App\Student', 'user_id');
    }

    public function send_notifications()
    {
        return $this->hasMany('App\Notification', 'sender_id');
    }

    public function receive_notification()
    {
        return $this->hasMany('App\Notification', 'receiver_id');
    }

    public function isStudent()
    {
        return $this->role_id == 1;
    }

    public function isTeacher()
    {
        return $this->role_id == 2;
    }
}
