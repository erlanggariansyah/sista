@extends('layouts.cms')
@section('judul')
Dosen
@endsection

@section('body')
<div style="display: inline;">
<p>Dosen > Kelola Dosen</p>
<a href="/dosen/tambah">
<button type="button" class="btn btn-success">Tambah Dosen</button>
</a>
<br>
<br>
<div class="table-responsive">
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>Prodi</th>
        <th>Email</th>
        <th>Verifikasi</th>
        <th>Action</th>
    </tr>
<?php foreach ($dosen as $mhs) : ?>
    <tr>
        <td>{{$mhs->id}}</td>
        <td>{{$mhs->nama_lengkap}}</td>
        <td>{{$mhs->prodi}}</td>
        <td>{{$mhs->email}}</td>
        <td><?php if ($mhs->is_active == 0) {
            echo "Belum Verifikasi Email";
        } else {
            echo "Terverifikasi";
        } ?></td>
        <td>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Hapus</button>
        </td>
    </tr>
<?php endforeach; ?>
</table>
</div>
</div>
@endsection