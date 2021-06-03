<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About(){
        
        return view('front.layout.master');
    }
}
