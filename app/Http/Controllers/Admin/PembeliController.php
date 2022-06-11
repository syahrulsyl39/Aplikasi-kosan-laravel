<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembali;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $data_pembeli = Pembali::paginate(4);
        return view('backend.pembeli.index', compact('data_pembeli'));
    }

    public function delete($id)
    {
        $data_pembeli = Pembali::where('id', $id)->first();
        $data_pembeli->delete();

        return redirect()->route('index-pembeli');
    }
}
