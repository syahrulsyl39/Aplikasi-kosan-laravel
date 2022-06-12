<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Administrator extends Controller
{
    public function index()
    {
        $data_user = User::paginate(4);
        return view('backend.user.index', compact('data_user'));
    }

    public function edit($id)
    {
        $data_user = User::where('id', $id)->first();

        return view('backend.user.edit', compact('data_user'));
    }

    public function update(Request $request, $id)
    {
        $data_user = User::where('id', $id)->first();
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('user');
            if ($data_user->foto && file_exists(storage_path('app/public', $data_user->foto))) {
                Storage::delete('public/', $data_user->foto);
                $file = $request->file('foto')->store('user');
            }
        }

        if ($request->file('foto') === null) {
            $file = $data_user->foto;
        }

        if ($request->input('password')) {
            $password = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'role'=>$request->input('role'),
            'password'=>$request->input('password'),
            'foto'=>$file
            ];
        }else{
            $password=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'role'=>$request->input('role'),
                'foto'=>$file
            ];
        }

        $data_user->update($password);

        return redirect()->route('index-user');
    }
}
