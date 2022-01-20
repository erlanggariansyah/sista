<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;

class DosenController extends Controller
{
    public function read () {
        $dosen = User::where('role', 1)->get();
        return view('cms.dosen', compact('dosen'));
    }

    public function tambahForm () {
        return view ('cms.tambah_dosen');
    }

    public function tambahFormPost (Request $request) {
        $validation = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'prodi' => 'required',
            'password' => 'required',
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'unique:users,email']
        ]);

        if ($validation->fails()) {
            return redirect()
            ->back()
            ->with('error', $validation->messages());
        }

        User::create([
            'nama_lengkap' => $request['nama_lengkap'],
            'prodi' => $request['prodi'],
            'password' => Hash::make($request['password']),
            'username' => $request['username'],
            'email' => $request['email'],
            'role' => 1,
            'is_active' => 1
        ]);

        return redirect('dosen')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function hapus ($id) {
        User::where('id', $id)->delete();

        return redirect('dosen')->with('success', 'Dosen berhasil dihapus');
    }

    public function edit ($id) {
        $user = User::where('id', $id)->first();
        
        return view ('cms.edit_dosen')->with(['dosen' => $user]);
    }
}
