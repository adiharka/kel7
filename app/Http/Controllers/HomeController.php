<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'pgw') {
            return redirect()->route('pgwIndex');

        }  
        elseif (Auth::check() && Auth::user()->role == 'user') {
            return redirect()->route('userIndex');
 
        } else {
            // Session::flash('error', 'Email atau password salah');
            return redirect()->route('landingpage');
        }
    }
}
