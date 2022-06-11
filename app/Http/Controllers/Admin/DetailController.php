<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Kosan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    public function index()
    {
        $data_detail = Detail::paginate(4);
        $kosans = Kosan::all();
        return view('backend.detail.index', compact('data_detail', 'kosans'));
    }

    public function create()
    {
        $kosan = Kosan::all();
        return view('backend.detail.create', compact('kosan'));
    }

    public function store(Request $request)
    {

        if ($request->file('gamabr')) {
            $file1 = $request->file('gamabr')->store('detail_cover');
        }

        if ($request->file('detail_gambar')) {
            $file2 = $request->file('detail_gambar')->store('detail_gambar');
        }

        Detail::create([
            'jeniskosan_id'=>$request->input('jeniskosan_id'),
            'deskripsi'=>$request->input('deskripsi'),
            'harga'=>$request->input('harga'),
            'gamabr'=>$file1,
            'detail_gambar'=>$file2
        ]);

        return redirect()->route('index-detail');
    }

    public function delete($id)
    {
        $data_detail = Detail::where('id', $id)->first();
        if ($data_detail->gamabr && file_exists(storage_path('app/public', $data_detail->gamabr))) {
            Storage::delete('public/', $data_detail->gamabr);
        }
        if ($data_detail->detail_gambar && file_exists(storage_path('app/public', $data_detail->detail_gambar ))) {
            Storage::delete('piblic/', $data_detail->detail_gambar);
        }
        $data_detail->delete();
        return redirect()->route('index-detail');

    }
}
