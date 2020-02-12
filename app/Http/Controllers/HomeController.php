<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;

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
        /* On this method I check if the user is Admin and redirect to home else redirect to albums
         *
         */
        if(strtolower(Auth::user()->role->name) === 'admin')
        {
            return view('home');
        }

        $albums = Album::all();

        return view('album.index',compact('albums'));

    }
}
