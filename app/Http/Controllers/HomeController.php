<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
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
    // public function home()
    // {
    //     return view('home');
    // }
    public function index()
    {
        return view('authFrontend/index');
    }
    public function admin()
    {
        return view('authBackend/admin');
    }
    public function profileview()
    {       
        return view('authBackend/profile');
    }
    

}
