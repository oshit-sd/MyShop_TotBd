<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Categores;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        $allITM = Items::all();
        return view('/Category.add_Category')->with(['allITM' => $allITM]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Categores::create($data);
        return redirect('/Category/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
        $allCI = DB::table('categores')
            ->join('items','categores.item_id','=','items.id' )
            ->orderBy('categores.id' , 'DESC')
            ->select('categores.*','items.item_name')
            ->paginate(15);
        return view('/Category.list_Category')->with(['allData' => $allCI]);
    }


    public function edit($id)
    {
        $allITM = Items::all();

        $allBrand = Brands::all();

        $cate = DB::table('categores')
            ->join('items','categores.item_id','=','items.id' )
            ->orderBy('categores.id' , 'DESC')
            ->select('categores.*','items.item_name')
            ->where('categores.id', '=', $id)
            ->get();

        return view('Category.edit_Category')->with(['cate' => $cate, 'allITM' => $allITM, 'brand' => $allBrand ]);
    }

    public function update(Request $request, $id)
    {
        $cate =  Categores::find($id);
        $data = $request->all();
        $cate->update($data);
        return redirect('/Category')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $cate =  Categores::find($id);
        $cate->delete();
        return redirect('/Category')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
