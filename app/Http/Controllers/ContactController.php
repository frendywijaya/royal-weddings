<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends BaseController
{
    //show home data
    public function index()
    {
        $staticKontak = StaticPage::getData('contactstatic');

        return view('frontend.contact', [
            'staticKontak' => $staticKontak
        ]);
    }

    public function storeMassage(Request $request)
    {
        // create validation
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // store data to table inboxes
        Inbox::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // redirect back with success message
        return redirect('/success');
    }
}
