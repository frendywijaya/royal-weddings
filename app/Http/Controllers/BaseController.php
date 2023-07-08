<?php

namespace App\Http\Controllers;

use App\Models\StaticPage;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    // make constructor
    public function __construct()
    {
        // get data from static table header
        $staticHeaderData = StaticPage::getData('header');
        // get data from static table footer
        $staticFooterData = StaticPage::getData('footer');
        // get data from static table social media
        $staticSocialMediaData = StaticPage::getData('socialmedia');
        // get data from static table contact
        $staticContactData = StaticPage::getData('contactwidget');
        // get contact info
        $staticContactInfo = StaticPage::getData('contactinfo');

        // share data to all views
        view()->share([
            'staticHeaderData' => $staticHeaderData,
            'staticFooterData' => $staticFooterData,
            'staticSocialMediaData' => $staticSocialMediaData,
            'staticContactData' => $staticContactData,
            'staticContactInfo' => $staticContactInfo,
        ]);
    }
}
