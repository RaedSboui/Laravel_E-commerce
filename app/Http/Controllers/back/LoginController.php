<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showForm()
    {
        return view('pages.back.login');
    }

    public function login(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        if(Auth::user()->hasRole('admin')) {
            return view('pages.back.home');
        }else{
            return view('pages.back.login')
                ->withErrors('Sorry you are not Admin !');;
        } 
    }

  
    public function logout()
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->guest(route( 'admin.login' ));
    }

   
}
