<?php

namespace App\Http\Controllers;

use App\Myshopusers;
use App\Paymentinfos;
use App\Shippings;
use App\Shopcarts;
use Validator;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


   

    public function CheckoutStep2()
    {
        @session_start();
        $ses = session_id();

        $pro =  DB::table('shopcarts')
            ->where('session_id', $ses)
            ->first();
        if (!isset($pro))
        {
        
            return redirect('/checkoutStep1')->with('checkCart', 'Your Cart Is Empty, Please Shop to Continue');
        }
        else {
            $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();
             return view('checkout.checkout_step2')->with([
                'product' => $product,
            ]);
        }
    }


    public function ShippingInfo(Request $request)
    {
        @session_start();
        $ses = session_id();

            $this->validate($request, [
                'email' => 'required | email | unique:shippings'
            ]);

            $user = new Shippings();

            $user->user_id = Input::get('user_id');
            $user->ses_id = Input::get('ses_id');
            $user->f_name = Input::get('f_name');
            $user->l_name = Input::get('l_name');
            $user->mobile = Input::get('mobile');
            $user->email = Input::get('email');
            $user->addr1 = Input::get('addr1');
            $user->addr2 = Input::get('addr2');
            $user->city = Input::get('city');
            $user->zip = Input::get('zip');
            $user->country = Input::get('country');

            $user->save();

        $ck =  DB::table('shippings')
            ->where('ses_id', $ses)
            ->first();
        if (isset($ck)) {
            return redirect('/checkoutStep3')->with('info', 'Your Information Successfully Stored');
        } else {
            return redirect('/checkoutStep1')->with('check', 'Your Cart Is Empty, Please Shop');
        }

    }

    public function CheckoutStep3()
    {
        @session_start();
        $ses = session_id();

        $sesMatch = DB::table('shippings')
            ->where('ses_id', $ses)
            ->first();

        if(empty($sesMatch))
        {
            return redirect('/checkoutStep2')->with('unnes', 'Please Give Shipping Address Before Payment Method');
        }
        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $pro = DB::table('shippings')
            ->select('ses_id','user_id')
            ->where('shippings.ses_id', $ses)
            ->first();

         $ck =  DB::table('shippings')
            ->where('ses_id', $ses)
            ->first();
        if (isset($ck)) {
            return view('checkout.checkout_step3')->with([
                'product' => $product
            ]);
        }
        else{
            return redirect('/checkoutStep2')->with('unnes', 'Please Give Shipping Address Before Payment Method');
        }
    }

    public function PaymentInfo(Request $request)
    {
        @session_start();
        $ses = session_id();

        $user = new Paymentinfos();

        $user->user_id = Input::get('user_id');
        $user->ses_id = Input::get('ses_id');
        $user->f_name = Input::get('f_name');
        $user->l_name = Input::get('l_name');
        $user->c_number1 = Input::get('c_number1');
        $user->c_number2 = Input::get('c_number2');
        $user->c_number3 = Input::get('c_number3');
        $user->c_number4 = Input::get('c_number4');
        $user->cvs = Input::get('cvs');
        $user->month = Input::get('month');
        $user->year = Input::get('year');

        $user->save();

        $ck =  DB::table('paymentinfos')
            ->where('ses_id', $ses)
            ->first();
        if (isset($ck)) {
            return redirect('/checkoutStep4')->with('card', 'Your Card Info Successfully Stored');
        } else {
            return redirect('/checkoutStep3')->with('checkPay', 'Please Give Payment Method Before Confirm & Pay');
        }
    }

    public function CheckoutStep4()
    {
        @session_start();
        $ses = session_id();

        $sesMatch = DB::table('paymentinfos')
            ->select('ses_id')
            ->where('paymentinfos.ses_id', $ses)
            ->first();

        if(empty($sesMatch))
        {
            return redirect('/checkoutStep3')->with('checkPay', 'Please Give Payment Method Before Confirm & Pay');
        }else {
            $product = DB::table('shopcarts')
                ->join('products', 'shopcarts.pro_id', '=', 'products.id')
                ->orderBy('shopcarts.id', 'DESC')
                ->select('shopcarts.*', 'products.img')
                ->where('shopcarts.session_id', $ses)
                ->get();

            $pro = DB::table('shippings')
                ->select('ses_id', 'user_id')
                ->where('shippings.ses_id', $ses)
                ->first();

            $ck =  DB::table('paymentinfos')
            ->where('ses_id', $ses)
            ->first();
            if (isset($ck)) {
                return view('checkout.checkout_step4')->with([
                    'product' => $product
                ]);
            } else {
                return redirect('/checkoutStep3')->with('checkPay', 'Please Give Payment Method Before Confirm & Pay');
            }
        }
    }


    public function Voucher()
    {
        @session_start();
        $ses = session_id();

        $pro =  DB::table('paymentinfos')
            ->where('ses_id', $ses)
            ->first();
        if (!isset($pro))
        {
            return redirect('/checkoutStep1')->with('vouSecure', 'You Can Not See This Page Before The Complete Chekout Step 1 to 4');
        }

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $pro = DB::table('shippings')
            ->select('ses_id','user_id')
            ->where('shippings.ses_id', $ses)
            ->first();
        
        $ck =  DB::table('paymentinfos')
            ->where('ses_id', $ses)
            ->first();
            if (isset($ck)) {
            return view('checkout.voucher')->with([
                'product' => $product
            ]);
        }
        else{
            return redirect('/checkoutStep4');
        }
    }

//
//    public function MyUserHome()
//    {
//        return view('MyShopUsersHome.index');
//    }



}
