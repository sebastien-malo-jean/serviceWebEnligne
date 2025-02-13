<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SWELController extends Controller
{
    public function index()
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
    public function contact()
    {
        return view('contact');
    }
    public function contactForm(Request $request)
    {
        
        return view('contact', ['data'=>$request]);
    }
}
