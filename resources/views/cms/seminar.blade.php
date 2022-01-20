@extends('layouts.cms')
@section('judul')
Seminar Mahasiswa
@endsection

@section('body')
<div style="display: inline;">
<p>Seminar > Kelola Seminar</p>
@if(Auth::user()->role == 1)
<a href="/seminar/tambah">
<button type="button" class="btn btn-success">Tambah Seminar</button>
</a>
@endif
<br>
<br>
<div class="table-responsive">
    <table class="table table-responsive">
        <tr>
            <th>NIM</th>
            <th>Mahasiswa / i</th>
            <th>Seminar</th>
            <th>Waktu</th>
            @if(Auth::user()->role == 1)
            <th>Peserta</th>
            <th>Ruangan</th>
            <th>Action</th>
            @endif
            @if(Auth::user()->role == 0)
            <th>Judul</th>
            @endif
        </tr>
        <?php foreach ($seminar as $s) : ?>
        <tr>
            <td>{{$s->nim}}</td>
            <td>{{$s->nama_lengkap}}</td>
            <td>{{$s->seminar}}</td>
            <td><?php
                echo "$s->jam_seminar"." $s->tanggal_seminar";
            ?></td>
            @if(Auth::user()->role == 1)
            <td></td>
            <td>{{$s->ruangan}}</td>
            <td>
            <a href="/seminar/{{$s->id}}/edit">
                <button type="button" class="btn btn-primary">Edit</button>
            </a>
            <a href="/seminar/{{$s->id}}/hapus">
                <button type="button" class="btn btn-danger">Hapus</button>
            </a>
            </td>
            @endif
            @if(Auth::user()->role == 0)
            <td>{{$s->judul}}</td>
            @endif
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
@endsection
