<?php

namespace App\Http\Controllers;

use App\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function create()
    {
        return view('/slider.add_Slider');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $image = Input::file('img');
        if(!isset($image)){
            $data = $request->all();
            Sliders::create($data);
            return redirect('/Slider/create')->with('message', 'Data Insert successfully');
        }
        else {
            $img = Sliders::create($data);

            if ($request->hasFile('img')) {
                $p_image = Input::file('img');
                $basename = time() . '.' . $p_image->getClientOriginalExtension();
                $path = public_path() . "/slider_img/" . $basename;
                $data2 = Image::make($p_image->getRealPath())->save($path);
            }
            $pimg = Sliders::find($img->id);

            $pimg->update(['img' => "/slider_img/" . $basename]);

            return redirect('/Slider/create')->with('message', 'Data Insert successfully');
        }
    }

    public function index()
    {
        $allCI = $slide = DB::table('sliders')
            ->orderBy('ID','DESC')
            ->paginate(8);
        return view('/slider.list_Slider')->with(['allData' => $allCI]);
    }


    public function edit($id)
    {
        $slide = Sliders::find($id);
        return view('slider.edit_Slider')->with(['slide' => $slide]);
    }

    public function update(Request $request, $id)
    {
        $pd =  Sliders::find($id);

        $image = Input::file('img');
        if(!isset($image)){
            $data = $request->all();
            $pd->update($data);
            return redirect('/Slider')->with('message', 'Data Update successfully');
        }
        else {
            if ($request->hasFile('img')) {
                $p_image = Input::file('img');
                $basename = time() . '.' . $p_image->getClientOriginalExtension();
                $path = public_path() . "/slider_img/" . $basename;
                $data2 = Image::make($p_image->getRealPath())->save($path);
            }
            $data = $request->all();
            $pd->update($data);

            $pd->update(['img' => "/slider_img/" . $basename]);

            return redirect('/Slider')->with('message', 'Data Update successfully');
        }
    }

    public function destroy($id)
    {
        $cate =  Sliders::find($id);
        $cate->delete();
        return redirect('/Slider')->with('msg', 'Data Delete successfully');
    }


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
