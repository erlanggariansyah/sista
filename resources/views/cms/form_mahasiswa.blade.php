@extends('layouts.cms')

@section('judul')
Form Edit Mahasiswa
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
    <legend style="color: black;">Edit Data Mahasiswa</legend>
    <form action="/mahasiswa/{{$user->id}}/edit" method="POST">
        @csrf
        <div style="display: flex;">
        <div style="display: inline;">
        <div>
            <label for="nama_lengkap">Nama Lengkap : </label>
            <input class="form-control" value="{{$user->nama_lengkap}}" type="text" id="nama_lengkap" name="nama_lengkap">
        </div>
        <br>
        <div>
            <label for="prodi">Prodi : </label>
            <select class="form-control" name="prodi" id="prodi" value="{{$user->prodi}}">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>
        <br>
        <div>
            <label for="nim">NIM : </label>
            <input value="{{$user->nim}}" class="form-control" type="nim" name="nim" id="nim">
        </div>
        </div>
        <div style="display: inline; padding-left: 10px;">
        <div>
            <label for="uname">Username : </label>
            <input class="form-control" type="text" id="uname" value="{{$user->username}}" name="username">
        </div>
        <br>
        <div>
            <label for="email">Alamat Email : </label>
            <input class="form-control" type="email" id="email" name="email" value="{{$user->email}}">
        </div>    
    </div>
        </div>
        <br>
        <button class="btn btn-warning" style="color: white;">Edit</button>
        <br>
        <br>    
    </form>
</fieldset>
@endsection
