<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('/ItemInfo.add_Item');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Items::create($data);
        return redirect('/Item/create')->with('message', 'Data Insert successfully');
    }

    public function index()
    {
//        $allMM = Mainmenu::all();
        $item = Items::paginate(15);
        return view('/ItemInfo.list_Item')->with(['allData' => $item ]);
    }


    public function edit($id)
    {
        $item = Items::find($id);
        return view('ItemInfo.edit_Item')->with(['item' => $item ]);
    }

    public function update(Request $request, $id)
    {
        $item =  Items::find($id);
        $data = $request->all();
        $item->update($data);
        return redirect('/Item')->with('message', 'Data Update successfully');
    }

    public function destroy($id)
    {
        $item =  Items::find($id);
        $item->delete();
        return redirect('/Item')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
