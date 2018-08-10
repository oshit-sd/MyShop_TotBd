<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopcarts extends Model
{
    protected $fillable = ['session_id','pro_id','pro_name','pro_price','total','quantity','color','size'];
}
