<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.welcome');
    }

    public function about(){
        return view('website.about'); 
    }

    public function service(){
        return view('website.services'); 
    }
}
