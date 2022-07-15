<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BoardingHouse;
use App\Models\Booking;
use App\Models\Kosan;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $product = Product::all();
        return view('frontend.home', compact('product'));
    }
    public function detail()
    {
        return view('frontend.detail');
    }
    public function booking()
    {
        return view('frontend.booking');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required|string',
            'email' => 'required|string',
            'no_phone' => 'required|string',
            'boarding_type' => 'required|string',
            'address' => 'required|string',
            'total_cost' => 'required|string',
        ]);

        Booking::create([
            "customer_name" => $request->input('customer_name'),
            "email" => $request->input('email'),
            "no_phone" => $request->input('no_phone'),
            "boarding_type" => $request->input('boarding_type'),
            "address" => $request->input('address'),
            "total_cost" => $request->input('total_cost'),
        ]);

        return redirect()->route('succes');
    }

    public function succes()
    {
        return view('frontend.succes');
    }  //
}
