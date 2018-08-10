<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Categores;
use App\Shopcarts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicHomeController extends Controller
{
    public function index()
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $slider =  DB::table('sliders')
            ->orderBy('ID', 'DESC')
            ->limit(12)
            ->get();

        $featured =  DB::table('products')
            ->where('Featured', 'Featured')
            ->orderBy('ID', 'DESC')
            ->limit(9)
            ->get();

        $new =  DB::table('products')
            ->where('New', 'New')
            ->orderBy('ID', 'DESC')
            ->limit(12)
            ->get();


        $popular =  DB::table('products')
            ->where('Popular', 'Popular')
            ->orderBy('ID', 'DESC')
            ->limit(12)
            ->get();


        return view('home.home')->with([
            'product' => $product,

            'slider' => $slider,

            'featured' =>$featured,

            'newPro' =>$new,

            'popular' =>$popular,
        ]);
    }


    public function Featured()
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
            ->where('Featured', 'Featured')
            ->get();

        $brand = Brands::all();

        $category = Categores::all();

        return view('home.featuredMore')->with([
            'product' => $product,
            'allPro' => $allPro,
            'brands' => $brand,
            'cateGory' => $category,
        ]);
    }


    public function NewPro()
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
            ->where('New', 'New')
            ->get();

        $brand = Brands::all();

        $category = Categores::all();

        return view('home.new_productsMore')->with([
            'product' => $product,
            'allPro' => $allPro,
            'brands' => $brand,
            'cateGory' => $category,
        ]);
    }

    public function PopularPro()
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
            ->where('Popular', 'Popular')
            ->get();

        $brand = Brands::all();

        $category = Categores::all();

        return view('home.popular_productsMore')->with([
            'product' => $product,
            'allPro' => $allPro,
            'brands' => $brand,
            'cateGory' => $category,
        ]);
    }
}
