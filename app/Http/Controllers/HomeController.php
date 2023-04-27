<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function prueba()
    {
        return view('prueba');
    }
    public function hola()
    {
        return view('hola');
    }
    public function form()
    {
        return view('form');
    }
    public function formanswer()
    {
        return view('formanswer');
    }
}
