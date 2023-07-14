<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends BaseController
{
    //show home data
    public function index()
    {
        $staticAbout = StaticPage::getData('aboutstatic');
        $teams = Team::all();

        return view('frontend.about', [
            'teams' => $teams,
            'staticAbout' => $staticAbout,
            'path' => Team::PATH,
        ]);
    }
}
