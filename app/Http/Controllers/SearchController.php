<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Categores;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function SearchPro()
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $brand = Brands::all();

        $category = Categores::all();

        $q = Input::get('q');
        $data = DB::table('products')
            ->where('category', 'LIKE', '%'.$q.'%')
            ->get();

        if(count($data)>0) {
            return view('search.search')->withDetails($data)->withQuery($q)
                ->with([
                    'product' => $product,
                    'brands' => $brand,
                    'cateGory' => $category,
                ]);
        }
        else {
            return view('search.search')->withMessage('No results found. Try to search again !')
                ->with([
                    'product' => $product,
                    'brands' => $brand,
                    'cateGory' => $category,
                ]);
        }
    }


    public function SearchResult()
    {
        @session_start();
        $ses = session_id();

        $product =  DB::table('shopcarts')
            ->join('products','shopcarts.pro_id','=','products.id' )
            ->orderBy('shopcarts.id' , 'DESC')
            ->select('shopcarts.*','products.img')
            ->where('shopcarts.session_id', $ses)
            ->get();

        $brand = Brands::all();

        $category = Categores::all();

        $q = Input::get('q');

        $data = DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->select('products.*','items.item_name')

            ->where('category', 'LIKE', '%'.$q.'%')
            ->orwhere('item_name', 'LIKE', '%'.$q.'%')
            ->orwhere('brand', 'LIKE', '%'.$q.'%')
            ->orwhere('product_name', 'LIKE', '%'.$q.'%')
            ->orwhere('red', 'LIKE', '%'.$q.'%')
            ->orwhere('green', 'LIKE', '%'.$q.'%')
            ->orwhere('blue', 'LIKE', '%'.$q.'%')
            ->orwhere('black', 'LIKE', '%'.$q.'%')
            ->orwhere('pink', 'LIKE', '%'.$q.'%')
            ->orwhere('purple', 'LIKE', '%'.$q.'%')
            ->orwhere('orange', 'LIKE', '%'.$q.'%')
            ->orwhere('white', 'LIKE', '%'.$q.'%')
            ->orwhere('yellow', 'LIKE', '%'.$q.'%')
            ->orwhere('xsmall', 'LIKE', '%'.$q.'%')
            ->orwhere('small', 'LIKE', '%'.$q.'%')
            ->orwhere('medium', 'LIKE', '%'.$q.'%')
            ->orwhere('large', 'LIKE', '%'.$q.'%')
            ->orwhere('elarge', 'LIKE', '%'.$q.'%')
            ->orwhere('huge', 'LIKE', '%'.$q.'%')
            ->get();

        if(count($data)>0) {
            return view('search.search')->withDetails($data)->withQuery($q)
                ->with([
                    'product' => $product,
                    'brands' => $brand,
                    'cateGory' => $category,
                ]);
        }
        else {
            return view('search.search')->withMessage('No results found. Try to search again !')
                ->with([
                    'product' => $product,
                    'brands' => $brand,
                    'cateGory' => $category,
                ]);
        }
    }
}
