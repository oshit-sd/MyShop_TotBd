<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function create()
    {
        return view('/brands.add_brand');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Brands::create($data);
        return redirect('/Brand/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
        $brands = Brands::paginate(15);
        return view('/brands.list_brand')->with(['allData' => $brands ]);
    }


    public function edit($id)
    {
        $Brands = Brands::find($id);
        return view('brands.edit_brand')->with(['brands' => $Brands ]);
    }

    public function update(Request $request, $id)
    {
        $item =  Brands::find($id);
        $data = $request->all();
        $item->update($data);
        return redirect('/Brand')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $item =  Brands::find($id);
        $item->delete();
        return redirect('/Brand')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
