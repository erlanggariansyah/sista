<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;

class MahasiswaController extends Controller
{
    public function read () {
        $mahasiswa = User::where('role', 0)->get();
        return view('cms.mahasiswa', compact('mahasiswa'));
    }

    public function tambahForm() {
        return view ('cms.tambah_mahasiswa');
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
            'role' => 0,
            'is_active' => 1
        ]);

        return redirect('mahasiswa')->with(['success' => 'Mahasiswa berhasil ditambahkan']);
    }

    public function hapus ($id) {
        User::where('id', $id)->delete();

        return redirect('mahasiswa')->with(['success' => 'Mahasiswa berhasil dihapus']);
    }

    public function edit ($id) {
        $user = User::where('id', $id)->first();
        return view ('cms.form_mahasiswa')->with(["user" => $user]);
    }

    public function editPost(Request $request, $id) {
        $validation = Validator::make($request->all(), [
            'nama_lengkap' => ['required'],
            'username' => ['required', 'unique:users,username,'.$id],
            'prodi' => 'required',
            'email' => ['required', 'unique:users,email,'.$id],
            'nim' => 'required'
        ]);

        $user = User::where('id', $id);

        $route = "/mahasiswa/$id/edit";

        if ($validation->fails()) {
            return redirect($route)->with(['error' => $validation->messages(),
        'user' => $user->get()]);
        }

        $user->update($request->except(['_token']));

        return redirect('mahasiswa')->with(['success' => 'Data mahasiswa berhasil diedit.']);
    }
}
