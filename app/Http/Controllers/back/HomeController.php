<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        return view('pages.back.home');
    }
}
