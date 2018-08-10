<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippings extends Model
{
    protected $fillable = ['user_id','ses_id','f_name','l_name','mobile','email','addr1','addr2','city','zip','country'];
}
