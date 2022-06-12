<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use App\Models\Pembali;
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
        
        $penyewa = Pembali::all()->count();
        $kosan = Kosan::all()->count();
        return view('home', compact('kosan', 'penyewa'));
    }
}
