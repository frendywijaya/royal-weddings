<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends BaseController
{
    //show home data
    public function index()
    {
        $galleries = Gallery::all();

        return view('frontend.gallery',[
            'galleries' => $galleries,
        ]);
    }
}
