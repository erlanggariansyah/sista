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
            
        ]);

        return view ('cms.seminar')->with('success', 'Seminar berhasil ditambahkan.');
    }
}
