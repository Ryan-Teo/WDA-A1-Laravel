<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'user_email','user_name','os','software_issue','status','comment'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
