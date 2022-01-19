@extends('layouts.cms')
@section('judul')
Seminar Mahasiswa
@endsection

@section('body')
<div style="display: inline;">
<p>Seminar > Kelola Seminar</p>
<a href="/seminar/tambah">
<button type="button" class="btn btn-success">Tambah Seminar</button>
</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-responsive">
        <tr>
            <th>NIM</th>
            <th>Mahasiswa / i</th>
            <th>Seminar</th>
            <th>Waktu</th>
            <th>Peserta</th>
            <th>Ruangan</th>
            <th>Action</th>
        </tr>
        <?php foreach ($seminar as $s) : ?>
        <tr>
            <td>{{$s->nim}}</td>
            <td>{{$s->nama_lengkap}}</td>
            <td>{{$s->seminar}}</td>
            <td><?php
                echo "$s->jam_seminar"." $s->tanggal_seminar";
            ?></td>
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
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
@endsection
