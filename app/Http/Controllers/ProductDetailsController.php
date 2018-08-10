<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    public function index($id,$cate)
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

        $RelatedPro =  DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->select('products.*','items.item_name')
            ->where('products.category', $cate)
            ->get();

        return view('product_details.product_details')->with([
            'product' => $product,

            'details' =>$Pdetails,

            'relPro' =>$RelatedPro
        ]);
    }
}
