<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Categores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarToShopController extends Controller
{
      public function ShopNow()
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $allPro = DB::table('products')
            ->orderBy('products.id' , 'DESC')
            ->get();

        $brand = Brands::all();

        $category = Categores::all();

        return view('shop.shop')->with([
            'product' => $product,
            'allPro' => $allPro,
            'brands' => $brand,
            'cateGory' => $category,
        ]);
    }

    public function AllItemProduct($item)
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $allItem = DB::table('items')
            ->join('products','items.id','=','products.item' )
            ->select('items.*','products.id','products.img','products.item','products.category','products.product_name','products.product_price','products.red','products.green','products.blue','products.black','products.pink','products.purple','products.orange','products.white','products.yellow','products.xsmall','products.small','products.medium','products.large','products.elarge','products.huge','products.brand','products.details')
            ->orderBy('products.id' , 'DESC')
            ->where('items.item_name', $item)
            ->get();

        $brand = Brands::all();

        $linkItem = DB::table('items')
            ->where('items.item_name', $item)
            ->limit(1)
            ->get();

        $cateGory = DB::table('items')
            ->join('categores','items.id','=','categores.item_id' )
            ->select('items.*','categores.category','categores.id')
            ->orderBy('categores.ID','DESC')
            ->where('items.item_name', $item)
            ->get();

        return view('shop.item_product')->with([
            'product' => $product,
            'allItem' => $allItem,
            'linkItem' => $linkItem,
            'brands' => $brand,
            'cateGory' => $cateGory,
        ]);
    }

    public function AllCategoryProduct($cate)
    {
        @session_start();
        $ses = session_id();

        $brand = Brands::all();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $allCate = DB::table('products')
            ->where('products.category', $cate)
            ->orderBy('products.id' , 'DESC')
            ->get();


        $linkCate = DB::table('categores')
            ->join('items','categores.item_id','=','items.id' )
            ->select('categores.*','items.item_name')
            ->where('categores.category', $cate)
            ->limit(1)
            ->get();

        return view('shop.category_product')->with([
            'product' => $product,
            'allCate' => $allCate,
            'linkCate' => $linkCate,
//            'cateGory' => $cateGory,
            'brands' => $brand,
        ]);
    }
}
