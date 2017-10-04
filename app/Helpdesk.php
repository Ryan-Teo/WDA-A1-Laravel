<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Helpdesk extends Authenticatable
{
    use Notifiable;

    protected $guard = 'helpdesk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function inquiries(){
        return $this->hasMany('App\Inquiry');
    }

    protected $hidden =[
        'password','remember_token'
    ];
}
