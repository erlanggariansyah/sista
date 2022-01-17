@extends('layouts.cms')

@section('judul')
Form Seminar / Sidang Mahasiswa
@endsection

@section('body')
<fieldset>
    <legend style="color: black;">Form Daftar Seminar TA</legend>
    <form action="/seminar/tambah" method="POST">
        @csrf
        <div style="display: flex;">
        <div style="display: inline;">
        <div>
            <label for="nim">NIM : </label>
            <input type="text" id="nim" name="nim">
        </div>
        <div>
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama_lengkap">
        </div>
        <div>
            <label for="prodi">Prodi : </label>
            <select name="prodi" id="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>

        <div>
            <label for="date">Tanggal Seminar : </label>
            <input type="date" id="date" name="tanggal_seminar">
        </div>
        <div>
            <label for="hour">Jam Seminar : </label>
            <input type="time" id="hour" name="jam_seminar">
        </div>
        <div>
            <label for="room">Ruangan : </label>
            <input type="text" name="ruangan" id="room">
        </div>
        </div>
        <div style="display: inline;">
        <div>
            <label for="judul">Judul TA : </label>
            <textarea name="judul_ta" id="judul" cols="30" rows="2"></textarea>
        </div>
        <div>
            <label for="seminar">Seminar : </label>
            <select name="seminar" id="seminar">
                <option value="Proposal">Proposal</option>
                <option value="Skripsi">Skripsi</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Parenting">Parenting</option>
            </select>
        </div>
        <div>
            <label for="pembimbing">Pembimbing : </label>
            <select name="pembimbing" id="pembimbing">
                <?php foreach ($dosen as $d) : ?>
                <option value="{{$d->nama_lengkap}}">{{$d->nama_lengkap}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="penguji_1">Penguji 1 : </label>
            <select name="penguji_1" id="penguji_1">
                <?php foreach ($dosen as $d) : ?>
                <option value="{{$d->nama_lengkap}}">{{$d->nama_lengkap}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="penguji_2">Penguji 2 : </label>
            <select name="penguji_2" id="penguji_2">
                <?php foreach ($dosen as $d) : ?>
                <option value="{{$d->nama_lengkap}}">{{$d->nama_lengkap}}</option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        </div>
        <button class="btn btn-success" style="color: white;">Tambah Seminar</button>
    </form>
</fieldset>
@endsection
