@extends('layouts.cms')

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
<div class="col-lg-9" style="position: absolute; top: 30%; padding: 7px;">
                                <br>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Kategori Seminar
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="25"></canvas></div>
                                    <div class="card-footer small text-muted">Diupdate pada {{date('d-m-Y');}}</div>
                                </div>
                            </div>
@endsection

@section('script')
<script>
// Pie Chart
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Proposal", "Skripsi", "Pendidikan", "Parenting"],
    datasets: [{
    data: [{{$proposal}}, {{$skripsi}}, {{$pendidikan}}, {{$parenting}}],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
</script>
@endsection
