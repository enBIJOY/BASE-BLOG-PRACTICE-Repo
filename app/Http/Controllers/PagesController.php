<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home (){
        return view('frontend.home');
    }
    public function blog (){
        return view('frontend.blog');
    }
    public function sport (){
        return view('frontend.sport');
    }
    public function technology (){
        return view('frontend.technology');
    }
    public function nature (){
        return view('frontend.nature');
    }
    public function political (){
        return view('frontend.political');
    }
    public function about (){
        return view('frontend.about');
    }
    public function contact (){
        return view('frontend.contact');
    }
    public function letestNews (){
        return view('frontend.letestNews');
    }


    public function xmltext (){
        return view('frontend.xml.index');
    }
}
