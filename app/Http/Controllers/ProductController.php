<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Categores;
use App\Items;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function create()
    {
        $allBrand = Brands::all();
        $allITM = DB::table('items')
            ->pluck('item_name','id');
        return view('/product.create_product')->with(compact('allITM','allBrand'));
    }

    public function createAjax($id)
    {
        $all = DB::table('categores')
            ->where('item_id', $id)
            ->pluck('category','id');

        return response()->json($all);
    }

    public function SearchProduct()
    {
        $q = Input::get('q');
        $data = DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->select('products.*','items.item_name')
            ->where('product_name', 'LIKE', '%'.$q.'%')
            ->orwhere('category', 'LIKE', '%'.$q.'%')
            ->orwhere('item_name', 'LIKE', '%'.$q.'%')
            ->orwhere('brand', 'LIKE', '%'.$q.'%')
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
            return view('product.search')->withDetails($data)->withQuery($q);
        }
        else {
            return view('product.search')->withMessage('No results found. Try to search again !');
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();


        $image = Input::file('img');
        if(!isset($image)){
            $data = $request->all();
            Products::create($data);
            return redirect('/Product/create')->with('message', 'Data Insert successfully');
        }
        else {
            $img = Products::create($data);

            if ($request->hasFile('img')) {
                $p_image = Input::file('img');
                $basename = time() . '.' . $p_image->getClientOriginalExtension();
                $path = public_path() . "/products_pic/" . $basename;
                $data2 = Image::make($p_image->getRealPath())->save($path);
            }
            $pimg = Products::find($img->id);

            $pimg->update(['img' => "/products_pic/" . $basename]);

            return redirect('/Product/create')->with('message', 'Data Insert successfully');
        }
    }


    public function index()
    {
        $allP = DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->orderBy('products.id' , 'DESC')
            ->select('products.*','items.item_name')
            ->paginate(15);

        return view('/product.show_product')->with(['allData' => $allP ]);
    }

    public function next()
    {
        $allP = DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->orderBy('products.id' , 'DESC')
            ->select('products.*','items.item_name')
            ->paginate(10);
        return view('/product.next_products')->with(['allData' => $allP ]);
    }


    public function edit($id)
    {
        $allITM = DB::table('items')
            ->pluck('item_name','id');
        $allCate= Categores::all();
        $allBrand = Brands::all();

        $product = DB::table('products')
            ->join('items','products.item','=','items.id' )
            ->orderBy('products.id', 'DESC')
            ->select('products.*','items.item_name')
            ->where('products.id', '=', $id)
            ->get();

        return view('/product.edit_product')->with(compact('allITM','allBrand','product','allCate'));

    }

    public function update(Request $request, $id)
    {
        $pd =  Products::find($id);

        $image = Input::file('img');
        if(!isset($image)){
            $data = $request->all();
            $pd->update($data);
            return redirect('/Product')->with('message', 'Data Update successfully');
        }
        else {
            if ($request->hasFile('img')) {
                $p_image = Input::file('img');
                $basename = time() . '.' . $p_image->getClientOriginalExtension();
                $path = public_path() . "/Products_pic/" . $basename;
                $data2 = Image::make($p_image->getRealPath())->save($path);
            }
            $data = $request->all();
            $pd->update($data);

            $pd->update(['img' => "/Products_pic/" . $basename]);

            return redirect('/Product')->with('message', 'Data Update successfully');
        }
    }

    public function destroy($id)
    {
        $pd =  Products::find($id);
        $pd->delete();
        return redirect('/Product')->with('msg', 'Data Delete successfully');
    }

    public function DeleteFeatured(Request $request, $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update(['featured' => '']);
        return back();
    }

    public function DeleteNew(Request $request, $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update(['new' => '']);
        return back();
    }

    public function DeletePopu(Request $request, $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update(['popular' => '']);
        return back();
    }


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
