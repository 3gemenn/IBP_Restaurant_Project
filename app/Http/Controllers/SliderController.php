<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $slider = DB::table('sliders')->get();
        return view('slider.list',['slider'=>$slider]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
    }

    public function createSlider(Request $request)
    {   $slider = new Slider();
        //$slider->images = Storage::putFile('images', $request->file('images'));
        if($request->file('images')){
            $slider->images=$request->file('images')->store('images');
        }
        // $dosyaYolu = $request->file('images')->store('dosyalar');
       // $path = Storage::disk('public')->putFile("app/dosyalar", $dosyaYolu);

        $slider->title = $request->input('title');
       // $slider->images = $path;
        $slider->save();

        return redirect('/slider/list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Slider $slider,$id)
    {
        $data = Slider::find($id);
        return view('slider.edit',['data'=>$data]);
    }

    public function editSlider(Request $request)
    {
        $slider = Slider::findOrFail($request->input('id'));
        $slider->title = $request->input('title');
        $slider->images = $request->input('images');
        $slider->created_date = Carbon::now();

        $slider->save();
        return redirect('/slider/list');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = Slider::find($id);

        if ($data) {
            $data->title = $request->input('title');
            $data->images = $request->input('images');
            $data->save();

            return redirect()->route('admin_slider')->with('success', 'User Information Updated');
        }

        return redirect()->route('admin_slider')->with('error', 'User not found');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider,$id)
    {
        $slider = $slider->find($id);

        if ($slider) {
            $slider->delete();
        }

        return redirect()->back();
    }
}
