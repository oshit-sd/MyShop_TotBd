<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class MyShopUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function MyOrders()
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $MyOrders=  DB::table('paymentinfos')
            ->join('users','paymentinfos.user_id','=','users.id' )
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->select('paymentinfos.*','users.id', 'shopcarts.pro_name','shopcarts.pro_id', 'shopcarts.quantity', 'shopcarts.total')

            ->join('products','shopcarts.pro_id','=','products.id' )
            ->select('paymentinfos.*','users.id', 'shopcarts.pro_name','shopcarts.pro_id', 'products.img', 'shopcarts.quantity', 'shopcarts.pro_price', 'shopcarts.total')

            ->where('paymentinfos.user_id', Auth::user()->id)
            ->orderBy('shopcarts.id' , 'DESC')
            ->get();


        if(count($MyOrders)>0) {
            return view('MyShopUsers.MyOrders')->withOrders($MyOrders)
                ->with([
                    'product' => $product,
                ]);
        }
        else {
            return view('MyShopUsers.MyOrders')->withMessage('No Orders Your Account !')
                ->with([
                    'product' => $product,
                ]);
        }
    }
}
