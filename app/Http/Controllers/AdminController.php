<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = DB::table('items')->get()->count();
        $cate = DB::table('categores')->get()->count();
        $pd = DB::table('products')->get()->count();
        return view('admin.dashboard')->with(['item' => $item,'cate' => $cate,'pd' => $pd],'logIn', '');
    }
}
