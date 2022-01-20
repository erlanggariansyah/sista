@extends('layouts.cms')

@section('judul')
Form Edit Dosen
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
    <legend style="color: black;">Edit Data Dosen</legend>
    <form action="/dosen/{{$dosen->id}}/edit" method="POST">
        @csrf
        <div style="display: flex;">
        <div style="display: inline;">
        <div>
            <label for="nama_lengkap">Nama Lengkap : </label>
            <input value="{{$dosen->nama_lengkap}}" class="form-control" type="text" id="nama_lengkap" name="nama_lengkap">
        </div>
        <br>
        <div>
            <label for="prodi">Prodi : </label>
            <select class="form-control" value="{{$dosen->prodi}}" name="prodi" id="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>
        <br>
        </div>
        <div style="display: inline; padding-left: 10px;">
        <div>
            <label for="uname">Username : </label>
            <input value="{{$dosen->username}}" class="form-control" type="text" id="uname" name="username">
        </div>
        <br>
        <div>
            <label for="email">Alamat Email : </label>
            <input value="{{$dosen->email}}" class="form-control" type="email" id="email" name="email">
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
