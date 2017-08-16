<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'cust_name','cust_email','service_area','subject','description',
    ];
}
