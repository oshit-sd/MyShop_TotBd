<?php

namespace App\Http\Controllers;

use App\Products;
use App\Shopcarts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ShopCartController extends Controller
{
    public function store(Request $request, $id)
    {
        @session_start();

        $sk =  Input::get('stk');
        $q =  Input::get('quantity');
        $pr_id =  Input::get('pro_id');
        $pr =  Input::get('pro_price');
        $cate =  Input::get('cate');

        $quan  = $sk - $q;

        if ($sk < $q)
        {
            session([
                'qun' => $quan,
            ]);
            return redirect('Products/'.$pr_id.'/'.$cate)->with('OutOfStock', 'message');
        }

        $data = $request->all();
        $scd = Shopcarts::create($data);

        $total = $pr * $q;

        $sc = Shopcarts::find($scd->id);
        $sc->update(['total' => $total]);


        $stk = $sk - $q;
        $pro= Products::find($scd->pro_id);
        $pro->update(['product_stock' => $stk]);

        return redirect('/checkoutStep1');
    }

    public function EditProduct($id)
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();
        $Pdetails =  DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->select('products.*','items.item_name')
            ->where('products.id', $id)
            ->get();

        $data =  DB::table('products')
            ->join('shopcarts','products.id','=','shopcarts.pro_id' )
            ->select('products.*','shopcarts.pro_id','shopcarts.id','shopcarts.session_id','shopcarts.quantity','shopcarts.color','shopcarts.size')
            ->where('shopcarts.id', $id)
            ->get();

        return view('/product_details.edit_product')->with(['editPro' => $data, 'product' => $product,'details' =>$Pdetails ]);
    }


    public function update(Request $request, $shopid)
    {
        $pr =  Input::get('pro_price');
        $q =  Input::get('quantity');
        $size =  Input::get('size');
        $color =  Input::get('color');
        $total = $pr * $q;

        $sc = DB::table('shopcarts')->where('shopcarts.id', $shopid);

        $sc->update([
            'pro_price' => $pr,
            'total' => $total,
            'quantity' => $q,
            'color' => $color,
            'size' => $size
        ]);

        return redirect('/checkoutStep1')->with('update', 'Your Product Info Update Successfully');
    }


    public function RemoveProduct($id)
    {
        $data = DB::table('shopcarts')
            ->where('shopcarts.id', $id);
        $data->delete();
        return back();
    }

    public function CheckoutStep1()
   {
       @session_start();
       $ses = session_id();

       $product =  DB::table('shopcarts')
           ->join('products','shopcarts.pro_id','=','products.id' )
           ->orderBy('shopcarts.id' , 'DESC')
           ->select('shopcarts.*','products.img')
           ->where('shopcarts.session_id', $ses)
           ->get();

       $Shop =  DB::table('shopcarts')
           ->join('products','shopcarts.pro_id','=','products.id' )
           ->orderBy('shopcarts.id' , 'DESC')
           ->select('shopcarts.*','products.img')
           ->where('shopcarts.session_id', $ses)
           ->get();

       if(count($Shop)>0) {
           return view('checkout.checkout_step1')->withProducts($Shop)
               ->with([
                   'product' => $product,
               ]);
       }
       else {
           return view('checkout.checkout_step1')->withMessage('Empty Shop Cart, Shop Now !')
               ->with([
                   'product' => $product,
               ]);
       }
   }


}
