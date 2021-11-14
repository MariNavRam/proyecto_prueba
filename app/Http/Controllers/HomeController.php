<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\casa;

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
        $casa = casa::all();
        return view('home',['casa' => $casa]);
    }
}
