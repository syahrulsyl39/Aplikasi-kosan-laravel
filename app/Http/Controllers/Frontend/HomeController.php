<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kosan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $home = Kosan::all();
        return view('frontend.home', compact('home'));
    }
    public function detail()
    {
        return view('frontend.detail');
    }
    public function booking()
    {
        return view('frontend.booking');
    }
    public function succes()
    {
        return view('frontend.succes');
    }  //
}
