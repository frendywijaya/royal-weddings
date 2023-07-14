<?php

namespace App\Http\Controllers;

class SuccessController extends Controller
{
    //show home data
    public function index() {
        dd('test');
        return view('frontend.success');
    }
}
