<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //show home data
    public function index()
    {
        $data = Storage::get('home.json');
        $item = $data::first();
        dd($item);

        return view('frontend.home',['data' => $data]);
    }
    // {
    //     $data = [];
    //     if (Storage::exists('home.json')) {
    //         $data = json_decode(Storage::get('home.json'), true);
    //         if (json_last_error() === JSON_ERROR_NONE) {
    //             if (isset($data['name'])) {
    //                 // do something with $data['name']
    //                 echo $data['name'];
    //             } else {
    //                 // handle the case where the 'name' key does not exist
    //                 echo 'key does not exist';
    //             }
    //         } else {
    //             // handle the case where the JSON data could not be decoded
    //             echo 'JSON failed to be read';
    //         }
    //     } else {
    //         // handle the case where the 'home.json' file does not exist
    //         echo 'home.json does not exist';
    //     }
    //     return view('frontend.home', ['data' => $data]);
    // }
}
