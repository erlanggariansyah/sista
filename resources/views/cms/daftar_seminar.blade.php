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
            <p style="text-align: center;"> <a href="/">Home</a> > Jadwal > Detail Jadwal > Daftar Peserta</p>
            <p>Mahasiswa Seminar : {{$seminar->nama_lengkap}}</p>
            <p>Judul : {{$seminar->judul}}</p>
            <p>Waktu : <?php echo $seminar->jam_seminar." ".$seminar->tanggal_seminar; ?></p>
            <div class="page-header">
                <fieldset class="border p-4">
                    <legend><?php 
                    echo "Form Peserta Seminar";
                    ?></legend>
                    <form method="POST" action="/seminar/{{$seminar->id}}/daftar">
                        @csrf
                    <label for="nim">NIM :</label>
                    <input type="number" class="form-control" name="nim" required>
                    <br>
                    <label for="nama">Nama Lengkap :</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                    <br>
                    <label for="prodi">Prodi : </label>
                    <select name="prodi" id="prodi" class="form-control">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                    <br>
                    <label for="program">Program :</label>
                    <br>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" value="D3" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        D3
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" value="S1 Reguler" id="s1r">
                    <label class="form-check-label" for="s1r">
                        S1 Reguler
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" value="S1 Fast Track" id="s1t">
                    <label class="form-check-label" for="s1t">
                        S1 Fast Track
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="program" value="S2" id="S2">
                    <label class="form-check-label" for="S2">
                        S2
                    </label>
                    </div>
                    
                </fieldset>
			</div>
            <br>
        <button class="btn btn-success" type="submit">Daftar Peserta</button>
        </form>
        </div>
	</div>
</div>
<br>

  </body>
</html>