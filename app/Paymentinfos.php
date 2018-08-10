<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymentinfos extends Model
{
    protected $fillable = ['user_id','ses_id','f_name','l_name','c_number1','c_number2','c_number3','c_number4','cvs','month','year','pending'];
}
