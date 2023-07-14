<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all testimoni data
        $testimonies = Testimoni::all();

        $breadcrumbs = [
            ['name' => 'Pages CMS'],
            ['name' => 'Testimoni'],
        ];

        return view('admin.cms.testimoni',
            [
                'testimonies' => $testimonies,
                'path' => Testimoni::PATH,
                'breadcrumbs' => $breadcrumbs,
                'title' => 'Testimoni'
            ]
        );
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
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'testimoni' => 'required',
        ]);

        // insert image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();

            $image->move(Testimoni::PATH, $image_name);
        }

        // insert testimoni
        Testimoni::create([
            'image' => $image_name,
            'name' => $request->name,
            'position' => $request->position,
            'testimoni' => $request->testimoni,
        ]);

        return redirect()->route('admin.cms.testimoni.index')->with('success', 'Testimoni berhasil ditambahkan');
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
        //
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'testimoni' => 'required',
        ]);

        // cek jika memilih gambar baru maka gambar lama akan dihapus
        if($request->image) {
            $brandLogo = Testimoni::find($id);
            unlink(public_path(Testimoni::PATH . $brandLogo->image));
        }

        // insert image jika ada
        if($request->hasFile('image')) {
            $image = $request->file('image');

            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();

            $image->move(Testimoni::PATH, $image_name);
        }

        $testimoni_data = [
            'image' => $image_name,
            'name' => $request->name,
            'position' => $request->position,
            'testimoni' => $request->testimoni,
        ];

        Testimoni::whereId($id)->update($testimoni_data);

        return redirect()->route('admin.cms.testimoni.index')->with('success', 'Testimoni berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // destroy data
        $testimoni = Testimoni::find($id);

        // cek jika memilih gambar baru maka gambar lama akan dihapus
        if($testimoni->image) {
            if (file_exists(public_path(Testimoni::PATH . $testimoni->image))) {
                unlink(public_path(Testimoni::PATH . $testimoni->image));
            }
        }

        $testimoni->delete();

        return redirect()->route('admin.cms.testimoni.index')->with('success', 'Testimoni berhasil dihapus');
    }
}
