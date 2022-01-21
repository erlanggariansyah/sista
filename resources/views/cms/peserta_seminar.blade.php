@extends('layouts.cms')
@section('judul')
Daftar Peserta Seminar
@endsection

@section('body')
<div style="display: inline;">
<p>Seminar > Peserta Seminar</p>
<br>
<h6>Seminar Mahasiswa : {{$seminar->nama_lengkap}}</h6>
<h6>Judul : {{$seminar->judul}}</h6>
<h6>Waktu Seminar : <?php echo $seminar->jam_seminar." ".$seminar->tanggal_seminar; ?></h6>
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
        <?php foreach ($member as $m) : ?>
        <tr>
            <td>{{$m->nim}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->prodi}}</td>
            <td><?php echo $seminar->jam_seminar." ".$seminar->tanggal_seminar; ?></td>
            <td>Diterima</td>
            <td>
            <a href="/seminar/{{$m->id}}/peserta/delete">
                <button type="button" class="btn btn-danger">Hapus</button>
            </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<a href="/seminar/{{$seminar->id}}/daftar">
<button class="btn btn-success">Tambah Peserta Seminar</button>
</a>
</div>
@endsection
