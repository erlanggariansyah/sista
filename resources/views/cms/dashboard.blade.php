@extends('layouts.cms')
@if(session('success'))
      <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
@endif

@section('judul')
Dashboard
@endsection

@section('body')
<div class="card text-white bg-primary mb-3" style="width: 25%; height: 5%; position: relative; margin-right: 0.6%; margin-left: 0.6%;">
  <div class="card-header">Mahasiswa</div>
  <div class="card-body">
    <p class="card-text text-white">{{$mahasiswa}}</p>
  </div>
</div>
<div class="card text-white bg-primary mb-3" style="width: 25%; height: 5%; position: relative; margin-right: 0.6%; margin-left: 0.6%;">
  <div class="card-header">Dosen</div>
  <div class="card-body">
    <p class="card-text text-white">{{$dosen}}</p>
  </div>
</div>
<div class="card text-white bg-primary mb-3" style="width: 25%; height: 5%; position: relative; margin-right: 0.6%; margin-left: 0.6%;">
  <div class="card-header">Seminar</div>
  <div class="card-body">
    <p class="card-text text-white">{{$seminar}}</p>
  </div>
</div>
<div class="card text-white bg-primary mb-3" style="width: 25%; height: 5%; position: relative; margin-right: 0.6%; margin-left: 0.6%;">
  <div class="card-header">Sidang</div>
  <div class="card-body">
    <p class="card-text text-white">{{$sidang}}</p>
  </div>
</div>
@endsection
