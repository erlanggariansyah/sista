@extends('layouts.cms')
@section('judul')
Mahasiswa
@endsection

@section('body')
<div style="display: inline;">
<p>Mahasiswa > Kelola Mahasiswa</p>
@if(Auth::user()->role == 1)
<a href="/mahasiswa/tambah">
<button type="button" class="btn btn-success">Tambah Mahasiswa</button>
</a>
@endif
<br>
<br>
<div class="table-responsive">
<table class="table">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Prodi</th>
        <th>Email</th>
        <th>Verifikasi</th>
        <th>Action</th>
    </tr>
<?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td>{{$mhs->id}}</td>
        <td style="text-align: center;"><?php
        if ($mhs->nim == null) {
            echo "-";
        } else {
            echo $mhs->nim;
        }
        ?></td>
        <td>{{$mhs->nama_lengkap}}</td>
        <td>{{$mhs->prodi}}</td>
        <td>{{$mhs->email}}</td>
        <td><?php if ($mhs->is_active == 0) {
            echo "Belum Verifikasi Email";
        } else {
            echo "Terverifikasi";
        } ?></td>
        <td>
            <a href="/mahasiswa/{{$mhs->id}}/edit">
            <button type="button" class="btn btn-primary">Edit</button>
            </a>
            @if(Auth::user()->role == 1)
            <a href="/mahasiswa/{{$mhs->id}}/delete">
            <button type="button" class="btn btn-danger">Hapus</button>
            </a>
            @endif
        </td>
    </tr>
<?php endforeach; ?>
</table>
</div>
</div>
@endsection