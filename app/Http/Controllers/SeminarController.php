<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seminar;
use App\Models\User;
use Auth;
use Validator;

class SeminarController extends Controller
{
    public function read () {
        $seminar = seminar::all();
        return view ('cms.seminar', compact('seminar'));
    }

    public function addSeminar () {
        $dosen = User::where('role', 1)->get();
        return view ('cms.form_seminar', compact('dosen'));
    }

    public function addSeminarInput(Request $request) {
        $validation = Validator::make($request->all(), [
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'prodi' => 'required',
            'tanggal_seminar' => 'required',
            'jam_seminar' => 'required',
            'ruangan' => 'required',
            'judul' => 'required',
            'seminar' => 'required',
            'pembimbing' => 'required',
            'penguji_1' => 'required',
            'penguji_2' => 'required'
        ]);

        if ($validation->fails()) {
            return redirect()
            ->back()
            ->with('error', $validation->messages());
        }

        $request['user_id'] = auth()->user()->id;
        
        seminar::create($request->all());
        return redirect('seminar')->with('success', 'Seminar berhasil ditambahkan.');
    }
}
