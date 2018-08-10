<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function ContactUs()
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        return view('/contactus.contactus')->with(['product' => $product]);
    }
}
