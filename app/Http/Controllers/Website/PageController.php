<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('website.pages.index');
    }
    public function services()
    {
        return view('website.pages.services');
    }
    public function work()
    {
        return view('website.pages.work');
    }
    public function about()
    {
        return view('website.pages.about');
    }
    public function contact()
    {
        return view('website.pages.contact');
    }
    public function branding()
    {
        return view('website.pages.branding');
    }
    public function usability()
    {
        return view('website.pages.usability');
    }
    public function technology()
    {
        return view('website.pages.technology');
    }
    public function digitalMarketing()
    {
        return back();
        // return view('website.pages.digital-marketing');
    }
}
