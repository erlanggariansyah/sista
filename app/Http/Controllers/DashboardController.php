<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\seminar;

class DashboardController extends Controller
{
    public function read () {
        $mahasiswa = User::where('role', 0)->count();
        $dosen = User::where('role', 1)->count();
        $seminar = seminar::where('seminar', '!=', 'Skripsi')->count();
        $sidang = seminar::where('seminar', 'Skripsi')->count();

        $proposal = seminar::where('seminar', 'Proposal')->count();
        $skripsi = seminar::where('seminar', 'Skripsi')->count();
        $pendidikan = seminar::where('seminar', 'Pendidikan')->count();
        $parenting = seminar::where('seminar', 'Parenting')->count();
        return view ('cms.dashboard', compact(['mahasiswa', 'dosen', 'seminar', 'sidang', 'proposal', 'skripsi', 'pendidikan', 'parenting']));
    }
}
