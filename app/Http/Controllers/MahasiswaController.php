<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MahasiswaController extends Controller
{
    public function read () {
        $mahasiswa = User::where('role', 0)->get();
        return view('cms.mahasiswa', compact('mahasiswa'));
    }
}
