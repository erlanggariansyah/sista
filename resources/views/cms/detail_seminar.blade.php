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
            <br>
            <p style="text-align: center;"> <a href="/">Home</a> > Jadwal > Detail Jadwal</p>
			<div class="page-header">
                <fieldset class="border p-4">
                    <legend><?php 
                    echo "Seminar ".$seminar->seminar;
                    ?></legend>
                    <div style="display:flex;">
                    <div style="display:inline;">
                    <p><?php echo "NIM  :   $seminar->nim"; ?></p>
                    <p><?php echo "Nama :   $seminar->nama_lengkap"; ?></p>
                    </div>
    
                    <div style="display:inline; margin-left: 50px;">
                    <p>Pembimbing : {{$seminar->pembimbing}}</p>
                    <p>Penguji  : {{$seminar->penguji_1}}</p>
                    </div>
                    </div>
                    <p>Prodi : {{$seminar->prodi}}</p>
                    <p>Judul : {{$seminar->judul}}</p>
                    <p>Waktu : <?php echo $seminar->jam_seminar." ".$seminar->tanggal_seminar; ?></p>
                    <p>Ruang : {{$seminar->ruangan}}</p>
                </fieldset>
			</div>
            <br>
            <a href="/seminar/{{$seminar->id}}/daftar">
        <button class="btn btn-success">Daftar Peserta</button>
        </a>	
    </div>
	</div>
</div>
<br>

  </body>
</html>