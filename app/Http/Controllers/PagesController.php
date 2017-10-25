<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title= 'About iProfiler';
        return view('pages.about')->with('title', $title);
    }

    public function index(){
        $title= 'Welcome to iProfiler';
        return view('pages.index')->with('title', $title);
    }
}
