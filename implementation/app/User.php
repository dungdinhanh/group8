<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        $this->belongsTo('App\Role', 'role_id');
    }

    public function teacher(){
        $this->hasOne('App\Teacher', 'teacher_id');
    }

    public function student(){
        $this->hasOne('App\Student', 'student_id');
    }

    public function send_notifications()
    {
        $this->hasMany('App\Notification', 'sender_id');
    }

    public function receive_notification()
    {
        $this->hasMany('App\Notification', 'receiver_id');
    }
}
