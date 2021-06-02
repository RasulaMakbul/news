<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About(){
        $firstName='Rasula';
        $lastName='Makbul';
        return view('front.layout.master',compact('firstName','lastName'));
    }
}
