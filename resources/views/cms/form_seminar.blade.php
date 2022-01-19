@extends('layouts.cms')

@section('judul')
Form Seminar / Sidang Mahasiswa
@endsection

@section('body')
<fieldset>
@if(Session::has('error'))
<div class="alert alert-danger">
        <strong>Ups!</strong> Input yang anda masukkan tidak valid.<br><br>
        <ul>
            @foreach (Session::get('error')->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <legend style="color: black;">Form Daftar Seminar TA</legend>
    <form action="/seminar/tambah" method="POST">
        @csrf
        <div style="display: flex;">
        <div style="display: inline;">
        <div>
            <label for="nim">NIM : </label>
            <input class="form-control" type="text" id="nim" name="nim">
        </div>
        <br>
        <div>
            <label for="nama">Nama : </label>
            <input class="form-control" type="text" id="nama" name="nama_lengkap">
        </div>
        <br>
        <div>
            <label for="prodi">Prodi : </label>
            <select class="form-control" name="prodi" id="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>
        <br>
        <div>
            <label for="date">Tanggal Seminar : </label>
            <input class="form-control" type="date" id="date" name="tanggal_seminar">
        </div>
        <br>
        <div>
            <label for="hour">Jam Seminar : </label>
            <input class="form-control" type="time" id="hour" name="jam_seminar">
        </div>
        <br>
        <div>
            <label for="room">Ruangan : </label>
            <input class="form-control" type="text" name="ruangan" id="room">
        </div>
        </div>
        <div style="display: inline; padding-left: 10px;">
        <div>
            <label for="judul">Judul TA : </label>
            <textarea class="form-control" name="judul" id="judul" cols="30" rows="2"></textarea>
        </div>
        <br>
        <div>
            <label for="seminar">Seminar : </label>
            <select class="form-control" name="seminar" id="seminar">
                <option value="Proposal">Proposal</option>
                <option value="Skripsi">Skripsi</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Parenting">Parenting</option>
            </select>
        </div>
        <br>
        <div>
            <label for="pembimbing">Pembimbing : </label>
            <select class="form-control" name="pembimbing" id="pembimbing">
                <?php foreach ($dosen as $d) : ?>
                <option value="{{$d->nama_lengkap}}">{{$d->nama_lengkap}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div>
            <label for="penguji_1">Penguji 1 : </label>
            <select class="form-control" name="penguji_1" id="penguji_1">
                <?php foreach ($dosen as $d) : ?>
                <option value="{{$d->nama_lengkap}}">{{$d->nama_lengkap}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div>
            <label for="penguji_2">Penguji 2 : </label>
            <select class="form-control" name="penguji_2" id="penguji_2">
                <?php foreach ($dosen as $d) : ?>
                <option value="{{$d->nama_lengkap}}">{{$d->nama_lengkap}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        </div>
        <br>
        <button class="btn btn-success" style="color: white;">Tambah Seminar</button>
        <br>
        <br>    
    </form>
</fieldset>
@endsection
