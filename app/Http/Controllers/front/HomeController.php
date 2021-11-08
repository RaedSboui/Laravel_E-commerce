<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    public function home() {

        $categories = Category::all();
        return view('pages.front.home', compact('categories'));
    }
        
    public function about(){
        $categories = Category::all();
        return view('pages.front.about', compact('categories'));
    }

    public function contact() { 
        $categories = Category::all();
        return view('pages.front.mail', compact('categories')); 
    }
}