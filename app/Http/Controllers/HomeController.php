<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus =  Menu::with('parents')->get();
        
        return view('home', compact('menus'));
    }
}
