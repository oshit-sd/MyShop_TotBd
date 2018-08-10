<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['item','category','brand','product_name','product_price','details','img','product_stock','red','green','blue','black','pink','purple','orange','white','yellow','xsmall','small','medium','large','elarge','huge','s28','s29','s30','s31','s32','featured','new','popular'];
}
