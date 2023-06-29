<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //show home data
    public function index()
    {
        return view('frontend.gallery');
    }
}
