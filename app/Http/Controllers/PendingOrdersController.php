<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendingOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function PendingOrders()
    {
        $pendingOrd =   DB::table('paymentinfos')
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->join('shippings','paymentinfos.ses_id','=','shippings.ses_id')
            ->select('paymentinfos.*','shopcarts.*', 'shippings.*')

            ->join('users','shippings.user_id','=','users.id')
            ->join('products','shopcarts.pro_id','=','products.id')
            ->select('shopcarts.*','products.*','users.*','shippings.*')

            ->where('shopcarts.pending', 0)
            ->orderBy('shopcarts.id', 'DESC')
            ->get();

        return view('viewOrders.viewOrders')->with([
            'pendingOrder' => $pendingOrd,
        ]);
    }

    public function View($id, $ses)
    {
        $customer =   DB::table('paymentinfos')
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->join('shippings','paymentinfos.ses_id','=','shippings.ses_id')
            ->select('paymentinfos.*','shopcarts.*', 'shippings.*')

            ->join('users','shippings.user_id','=','users.id')
            ->join('products','shopcarts.pro_id','=','products.id')
            ->select('shopcarts.*','products.*','users.*','shippings.*','paymentinfos.*')

            ->where('shopcarts.pro_id', $id)
            ->where('shopcarts.session_id', $ses)
            ->limit(1)
            ->get();

        return view('viewOrders.view')->with([
            'cusInfo' => $customer,
        ]);
    }


    public function ConfirmOrder($id, $ses)
    {
        $pendingOrd =   DB::table('paymentinfos')
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->join('shippings','paymentinfos.ses_id','=','shippings.ses_id')
            ->select('paymentinfos.*','shopcarts.*', 'shippings.*')

            ->join('users','shippings.user_id','=','users.id')
            ->join('products','shopcarts.pro_id','=','products.id')
            ->select('shopcarts.*','products.*','users.*','shippings.*')

            ->where('shopcarts.pending', 1)
            ->orderBy('shopcarts.id', 'DESC')
            ->get();

        DB::table('shopcarts')
            ->where('shopcarts.pro_id', $id)
            ->where('shopcarts.session_id', $ses)
            ->update(['pending' => 1]);

        return redirect('/ConfirmOrders')->with('conFirmOrd','Order Confirm Successfully',
            [
                'pendingOrder' => $pendingOrd,
        ]);
    }

    public function ConOrders()
    {
        $pendingOrd =   DB::table('paymentinfos')
            ->join('shopcarts','paymentinfos.ses_id','=','shopcarts.session_id')
            ->join('shippings','paymentinfos.ses_id','=','shippings.ses_id')
            ->select('paymentinfos.*','shopcarts.*', 'shippings.*')

            ->join('users','shippings.user_id','=','users.id')
            ->join('products','shopcarts.pro_id','=','products.id')
            ->select('shopcarts.*','products.*','users.*','shippings.*')

            ->where('shopcarts.pending', 1)
            ->orderBy('shopcarts.id', 'DESC')
            ->get();

        return view('viewOrders.confirmOrders')->with([
            'pendingOrder' => $pendingOrd,
        ]);
    }


    public function DeleteOrder($id, $ses)
    {
        $pd =  DB::table('shopcarts')->where('pro_id', $id)->where('session_id', $ses);
        $pd->delete();

        $pd1 =  DB::table('shippings')->where('ses_id', $ses);
        $pd1->delete();

        $pd2 =  DB::table('paymentinfos')->where('ses_id', $ses);
        $pd2->delete();

        return redirect('/PendingOrders')->with('DeleteOrder', 'Order Delete successfully');
    }

}
