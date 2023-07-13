<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\StaticPage;
use App\Models\BulletPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //show home data
    public function index()
    {
        // get all slider
        $sliders = Slider::all();
        // get static page aboutstatic
        $staticAbout = StaticPage::getData('homestatic');
        // get bullet points
        $bulletPoints = BulletPoint::all();

        return view('frontend.home',[
            'sliders' => $sliders,
            'pathSlider' => Slider::PATH,
            'staticHome' => $staticAbout,
            'bullets' => $bulletPoints,
            'pathBullet' => BulletPoint::PATH,
        ]);
    }
}
