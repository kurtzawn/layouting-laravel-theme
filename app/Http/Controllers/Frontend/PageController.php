<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }
    public function playlist()
    {
        return view('frontend.pages.playlist');
    }
    public function category()
    {
        return view('frontend.pages.category');
    }
    public function artist()
    {
        return view('frontend.pages.artist');
    }
    public function news()
    {
        return view('frontend.pages.news');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
