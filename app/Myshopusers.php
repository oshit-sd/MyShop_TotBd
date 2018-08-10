<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myshopusers extends Model
{
    protected $fillable = ['u_name','facebook_id','google_id','avatar','email','password'];
}
