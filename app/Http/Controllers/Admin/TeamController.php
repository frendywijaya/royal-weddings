<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all team data
        $teams = Team::all();

        $breadcrumbs = [
            ['name' => 'Pages CMS'],
            ['name' => 'Our Team CMS'],
        ];

        return view('admin.cms.team' , [
            'teams' => $teams,
            'path' => Team::PATH,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'Our Team'
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
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        // insert image jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // create filename unique untuk image
            $image_name = rand(1,100) . '-' . $image->getClientOriginalName();

            $image->move(Team::PATH, $image_name);
        }

        $team_data = [
            'name' => $request->name,
            'position' => $request->position,
            'image' => $image_name,
            'description' => $request->description,
        ];

        // insert data to table teams
        Team::create($team_data);

        return redirect()->route('admin.cms.team.index')->with('success', 'Team data has been added successfully!');
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
            'description' => 'required',
        ]);

        // update team
        $team = Team::find($id);
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;

        // cek apakah ada image yang di upload
        if ($request->hasFile('image')) {
            // cek jika image sama dengan di database
            if($request->file('image')->getClientOriginalName() == $team->image) {
                $team->image = $request->file('image')->getClientOriginalName();
            } else {
                // jika ada maka hapus image yang lama
                if ($team->image && file_exists(Team::PATH . $team->image)) {
                    unlink(Team::PATH . $team->image);
                }
                // upload image yang baru
                $image = $request->file('image');
                $image_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(Team::PATH, $image_name);
                $team->image = $image_name;
            }
        }

        $team->save();

        return redirect()->route('admin.cms.team.index')->with('success', 'Team data has been updated successfully!');
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
        $team = Team::find($id);

        // hapus image jika ada di folder uploads/team
        if ($team->image) {
            if(file_exists(public_path(Team::PATH . $team->image))) {
                unlink(public_path(Team::PATH . $team->image));
            }
        }

        $team->delete();

        return redirect()->route('admin.cms.team.index')->with('success', 'Team data has been deleted successfully!');
    }
}
