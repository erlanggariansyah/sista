@extends('layouts.cms')

@section('judul')
Seminar Mahasiswa
@endsection

@section('body')
<div style="display: inline;">
<a href="/seminar/tambah">
<button type="button" class="btn btn-success">Tambah Seminar</button>
</a>
<br>
<br>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th></th>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
</div>
</div>
@endsection
