<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all images
        $galleries = Gallery::all();

        $breadcrumbs = [
            ['name' => 'Pages CMS'],
            ['name' => 'Gallery'],
        ];

        return view('admin.gallery', [
            'galleries' => $galleries,
            'breadcrumbs' => $breadcrumbs,
            'path' => Gallery::PATH,
            'title' => 'Gallery'
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
            'image' => 'required',
        ]);

        // insert image
        $image = $request->file('image');
        // create filename unique untuk image
        $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
        $image->move(Gallery::PATH, $image_name);

        $gallery_data = [
            'title' => $request->title,
            'image' => $image_name,
        ];

        // insert data to table slider
        Gallery::create($gallery_data);

        return redirect()->back()->with('success', 'Image successfully added!');
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
        ]);

        // get data slider by id
        $gallery = Gallery::find($id);

        // cek jika image sama dengan di database
        if ($request->file('image')->getClientOriginalName() == $gallery->image){
            // jika sama, maka update data tanpa image
            $gallery_data = [
                'title' => $request->title,
            ];
        } else {
            if (file_exists(Gallery::PATH . $gallery->image)){
                unlink(Gallery::PATH . $gallery->image);
            }
            // jika tidak sama, maka update data dengan image
            // insert image
            $image = $request->file('image');
            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
            $image->move(Gallery::PATH, $image_name);

            $gallery_data = [
                'title' => $request->title,
                'image' => $image_name,
            ];
        }

        // update data
        $gallery->update($gallery_data);

        return redirect()->back()->with('success', 'Image successfully updated!');
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
        $gallery = Gallery::find($id);
        if (file_exists(Gallery::PATH . $gallery->image)){
            unlink(Gallery::PATH . $gallery->image);
        }

        // delete data
        $gallery->delete();

        return redirect()->back()->with('success', 'Image successfully deleted');
    }
}
