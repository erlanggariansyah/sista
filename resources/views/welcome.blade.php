<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISTA</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
	<link rel="icon" href="{{ url('logo.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center mt-5 mb-5">
				Sistem Informasi Seminar Tugas  Akhir - SISTA
			</h1>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Jadwal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="page2.html">Daftar Seminar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
			</ul>
			<div class="page-header">
				<h3 class="mt-3 mb-4">
					Alur seminar/Tugas Akhir
				</h3>
			</div>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-3 col-sm-6">
			<img alt="Bootstrap Image Preview" src="foto1.jpg" style="height: 110px;" class="rounded-circle">
		</div>
		<div class="col-md-3 col-sm-6">
			<img alt="Bootstrap Image Preview" src="foto1.jpg" style="height: 110px;" class="rounded-circle">
		</div>
		<div class="col-md-3 col-sm-6">
			<img alt="Bootstrap Image Preview" src="foto1.jpg" style="height: 110px;" class="rounded-circle">
		</div>
		<div class="col-md-3 col-sm-6">
			<img alt="Bootstrap Image Preview" src="foto1.jpg" style="height: 110px;" class="rounded-circle">
		</div>
	</div>
	<h3 class="mb-5">Jadwal Seminar/Sidang tugas Akhir Mahasiswa</h3>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							ID Seminar
						</th>
						<th>
							Nim
						</th>
						<th>
							Mahasiswa/i
						</th>
						<th>
							Seminar
						</th>
						<th>
							Waktu
						</th>
						<th>
							Ruangan
						</th>
						<th>
							Peserta
						</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach ($seminar as $s) : ?>
					<tr>
						<td>
							{{ $s->id }}
						</td>
						<td>
                            {{$s->nim}}
						</td>
						<td>
							{{$s->nama_lengkap}}
						</td>
						<td>
							Proposal
						</td>
						<td>
							<?php 
                            echo "$s->jam_seminar"." $s->tanggal_seminar";
                            ?>
						</td>
						<td>
                            {{$s->ruangan}}
						</td>
						<td>
							10 (views)
						</td>
					</tr>
                <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>

  </body>
</html>