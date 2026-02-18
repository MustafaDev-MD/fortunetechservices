<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Main pages
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function blog()
    {
        return view('blog');
    }
    public function careers()
    {
        return view('careers');
    }
    public function faqs()
    {
        return view('faqs');
    }
    public function contact()
    {
        return view('contact');
    }
    public function form()
    {
        return view('form');
    }

    // Legal page
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    // Newsletter
    public function subscribe(Request $request)
    {
        // Temporary dummy
        return back()->with('success', 'Thanks for subscribing!');
    }

    // Dynamic Blog Detail Page
    public function showBlog($slug)
    {
        // Make sure the Blade exists
        if (view()->exists("blogs.$slug")) {
            return view("blogs.$slug");
        }

        // If not found, show 404
        abort(404);
    }
}
