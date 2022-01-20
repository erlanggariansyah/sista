<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seminar;
use App\Models\member;
use App\Models\User;
use Auth;
use Validator;
use App\Mail\SeminarMail;
use Illuminate\Support\Facades\Mail;


class SeminarController extends Controller
{
    public function read () {
        $seminar = seminar::all();
        $member = member::all();
        return view ('cms.seminar', compact('seminar', 'member'));
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

    public function hapus ($id) {
        seminar::where('id', $id)->delete();
        return redirect()->back();
    }

    public function edit ($id) {
        $dosen = User::where('role', 1)->get();
        $seminar = seminar::where('id', $id)->first();

        return view('cms.form_seminar_edit')->with(['seminar' => $seminar, 'dosen' => $dosen]);
    }

    public function editPost (Request $request, $id) {
        seminar::where('id', $id)->update($request->except(['_token']));
        
        return redirect('seminar')->with('success', 'Seminar berhasil diedit');
    }

    public function pesertaSeminar() {
        return view ('cms.peserta_seminar');
    }

    public function home () {
        $seminar = seminar::all();
        $member = member::all();

        return view ('welcome')->with(['seminar' => $seminar, 'member' => $member]);
    }

    public function getSeminar($id) {
        $seminar = seminar::where('id', $id)->first();
        return view ('cms.detail_seminar')->with(['seminar' => $seminar]);
    }

    public function daftarSeminar ($id) {
        $seminar = seminar::where('id', $id)->first();
        return view ('cms.daftar_seminar')->with(['seminar' => $seminar]);
    }

    public function daftarSeminarPost(Request $request, $id) {
        $user = User::where('nim', $request->nim);

        $member = member::create([
            'seminar_id' => $id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'program' => $request->program
        ]);

        $s = seminar::where('id', $member->seminar_id)->first();

        $details = [
            "member_id" => $member->id,
            "judul" => $s->judul,
            "nama_host" => $s->nama_lengkap,
            "jam" => $s->jam_seminar,
            "tanggal" => $s->tanggal_seminar
        ];

        if ($user->first() != null) {
            Mail::to($user->first()->email)->send(new SeminarMail($details));
        }

        return redirect('/')->with(['success' => 'Anda berhasil mendaftar sebagai peserta seminar.']);
    }

    public function daftarSeminarForm () {
        $dosen = User::where('role', 1)->get();
        return view ('cms.daftar_seminar_form')->with(['dosen' => $dosen]);
    }

    public function daftarSeminarFormPost(Request $request) {
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
            return redirect('/daftar-seminar')
            ->with('error', $validation->messages());
        }

        $request['user_id'] = 0;

        seminar::create($request->all());

        return redirect('/')->with(['success' => 'Seminar berhasil didaftarkan']);
    }

    public function peserta ($id) {
        $seminar = seminar::where('id', $id)->first();
        $member = member::where('seminar_id', $id)->get();

        return view ('cms.peserta_seminar')->with(['seminar' => $seminar, 'member' => $member]);
    }
}
