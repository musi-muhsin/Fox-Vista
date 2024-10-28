<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Project;
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
        $projects = Project::where('status', 1)->orderBy('id', 'desc')->get();

        return view('website.pages.work', compact('projects'));
    }

    public function workDetails($id)
    {
        $project = Project::find($id);
        return view('website.pages.work-details', compact('project'));
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
