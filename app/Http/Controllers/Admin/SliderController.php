<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all sliders
        $sliders = Slider::all();

        $breadcrumbs = [
            ['name' => 'Pages CMS'],
            ['name' => 'Slider'],
        ];

        return view('admin.cms.slider', [
            'sliders' => $sliders,
            'breadcrumbs' => $breadcrumbs,
            'path' => Slider::PATH,
            'title' => 'Home Slider'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
        ]);

        // insert image
        $image = $request->file('image');
        // create filename unique untuk image
        $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
        $image->move(Slider::PATH, $image_name);

        $slider_data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $image_name,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ];

        // insert data to table slider
        Slider::create($slider_data);

        return redirect()->back()->with('success', 'Slider berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
        ]);

        // get data slider by id
        $slider = Slider::find($id);

        // cek jika image sama dengan di database
        if ($request->file('image')->getClientOriginalName() == $slider->image){
            // jika sama, maka update data tanpa image
            $slider_data = [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'content' => $request->content,
                'button_text' => $request->button_text,
                'button_link' => $request->button_link,
            ];
        } else {
            if (file_exists(Slider::PATH . $slider->image)){
                unlink(Slider::PATH . $slider->image);
            }
            // jika tidak sama, maka update data dengan image
            // insert image
            $image = $request->file('image');
            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
            $image->move(Slider::PATH, $image_name);

            $slider_data = [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'content' => $request->content,
                'image' => $image_name,
                'button_text' => $request->button_text,
                'button_link' => $request->button_link,
            ];
        }

        // update data
        $slider->update($slider_data);

        return redirect()->back()->with('success', 'Slider berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete image jika ada
        $slider = Slider::find($id);
        if (file_exists(Slider::PATH . $slider->image)){
            unlink(Slider::PATH . $slider->image);
        }

        // delete data
        $slider->delete();

        return redirect()->back()->with('success', 'Slider berhasil dihapus!');
    }
}
