<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){ 
    return view('frontend.home');
  }
  public function detail(){ 
    return view('frontend.detail');
  } 
  public function booking(){ 
    return view('frontend.booking');
  } 
  public function succes(){ 
    return view('frontend.succes');
  }  //
}
