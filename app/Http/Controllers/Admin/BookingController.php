<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    public function index()
    {
        $data_booking = booking::paginate(4);
        return view('backend.booking.booking', compact('data_booking'));
    }

    public function delete($id)
    {
        $data_booking = booking::where('id', $id)->first();
        if ($data_booking->gambar && file_exists(storage_path('app/public', ))) {
            Storage::delete('public/', $data_booking->gambar);
        }

        $data_booking->delete();

        return redirect()->route('index-booking');
    }
}
