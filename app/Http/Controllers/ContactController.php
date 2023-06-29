<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    //show home data
    public function index()
    {
        return view('frontend.contact');
    }
}
