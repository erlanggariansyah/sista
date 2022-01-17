<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DosenController extends Controller
{
    public function read () {
        $dosen = User::where('role', 1)->get();
        return view('cms.dosen', compact('dosen'));
    }
}
