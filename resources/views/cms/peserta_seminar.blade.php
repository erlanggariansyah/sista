@extends('layouts.cms')
@section('judul')
Daftar Peserta Seminar
@endsection

@section('body')
<div style="display: inline;">
<p>Seminar > Peserta Seminar</p>
<br>
<h6>Seminar Mahasiswa : </h6>
<h6>Judul : </h6>
<h6>Waktu Seminar : </h6>
<br>
<h2 style="text-align: center;">Daftar Peserta Seminar</h2>
<div class="table-responsive">
    <table class="table table-responsive">
        <tr>
            <th>NIM</th>
            <th>Mahasiswa / i</th>
            <th>Prodi</th>
            <th>Waktu</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <a href="">
                <button type="button" class="btn btn-primary">Edit</button>
            </a>
            <a href="">
                <button type="button" class="btn btn-danger">Hapus</button>
            </a>
            </td>
        </tr>
    </table>
</div>
<button class="btn btn-success">Tambah Peserta Seminar</button>
</div>
@endsection
