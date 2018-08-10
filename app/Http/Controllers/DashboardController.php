<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getAdminPanel()
    {
        $item = DB::table('items')->get()->count();
        $cate = DB::table('categores')->get()->count();
        $pd = DB::table('products')->get()->count();
        return view('admin.dashboard')->with(['item' => $item,'cate' => $cate,'pd' => $pd]);
    }

//    public function getAdminPanel()
//    {
//        return view('admin.dashboard');
//    }


   
}
