<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BulletPoint;
use Illuminate\Http\Request;

class BulletPointController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        // insert image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();
            $image->move(BulletPoint::PATH, $image_name);
        }

        $bullet_data = [
            'title' => $request->title,
            'image' => $image_name,
        ];

        // insert data to table bullets
        BulletPoint::create($bullet_data);

        return redirect()->back()->with('success', 'BulletPoint data has been added successfully!');
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
            'title' => 'required',
        ]);

        // update bullet
        $bullet = BulletPoint::find($id);
        $bullet->title = $request->title;

        // cek apakah ada image yang di upload
        if ($request->hasFile('image')) {
            // cek jika image sama dengan di database
            if($request->file('image')->getClientOriginalName() == $bullet->image) {
                $bullet->image = $request->file('image')->getClientOriginalName();
            } else {
                // jika ada maka hapus image yang lama
                if ($bullet->image && file_exists(BulletPoint::PATH . $bullet->image)) {
                    unlink(BulletPoint::PATH . $bullet->image);
                }
                // upload image yang baru
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(BulletPoint::PATH, $image_name);
                $bullet->image = $image_name;
            }
        }   

        $bullet->save();

        return redirect()->back()->with('success', 'BulletPoint data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $bullet_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bullet_id)
    {
        // destroy data
        $bullet = BulletPoint::find($bullet_id);
        
        // cek jika ada image
        if ($bullet->image) {
            if(file_exists(public_path(BulletPoint::PATH . $bullet->image))) {
                unlink(public_path(BulletPoint::PATH . $bullet->image));
            }
        }

        $bullet->delete();

        return redirect()->back()->with('success', 'BulletPoint data has been deleted successfully!');
    }
}
