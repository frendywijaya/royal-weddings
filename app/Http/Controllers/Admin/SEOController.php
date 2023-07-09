<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SEO;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class SEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get blog list
        $home = SEO::getData('home');
        $about = SEO::getData('about');
        $contact = SEO::getData('contact');
        $facilitation = SEO::getData('facilitation');
        $learning = SEO::getData('learning');

        $breadcrumbs = [
            ['name' => 'SEO'],
        ];

        return view('admin.SEO', [
            'home' => $home,
            'about' => $about,
            'contact' => $contact,
            'facilitation' => $facilitation,
            'learning' => $learning,
            'breadcrumbs' => $breadcrumbs,
            'title' => 'SEO Management'
        ]);
    }

    // public function edit()
    // {
    //     $pages = SEO::all();
    //     $data = [];

    //     foreach ($pages as $page) {
    //         $data[$page->page] = json_decode($page->data, true);
    //     }

    //     return view('seo.edit', ['data' => $data]);
    // }

    public function update(Request $request)
    {
        $data = $request->input('data');

        // Loop through all the pages and update their data
        foreach ($data as $page => $pageData) {
            $seo = SEO::where('page', $page)->first();
            $seo->data = json_encode($pageData);
            $seo->save();
        }

        return response()->json(['success' => true]);
    }
}
