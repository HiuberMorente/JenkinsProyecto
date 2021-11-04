<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('auth');
=======
        $this->middleware('Auth');
>>>>>>> 71a799d (update)
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $usuarios = Http::get('https://aseguramiento-api.herokuapp.com/api/Users');
        $usuariosArray = $usuarios->json();
        return view('home',compact('usuariosArray'));
=======

>>>>>>> 71a799d (update)
    }
}
