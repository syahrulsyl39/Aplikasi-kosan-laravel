<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show()
    {
        $booking = Booking::all();
        return view('backend.booking.index', compact('booking'));
    }
}
