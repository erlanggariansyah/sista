@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Daftar Sebagai') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="role" id="role">
                                    <option value="0">Mahasiswa</option>
                                    <option value="1">Dosen</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_lengkap" class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prodi" class="col-md-4 col-form-label text-md-end">{{ __('Prodi') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="prodi" id="prodi">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Bisnis Digital">Bisnis Digital</option>
                                </select>
                                @error('prodi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="container-fluid m-5 bottom">
	    <div class="row">
	      	<div class="col-md-12">
              <ul class="nav text-">
                <li class="nav-item ">
                  <h3>SISTA</h3>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Jadwal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page2.html  ">Daftar Seminar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Berita</a>
                <li class="nav-item">
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                <li class="nav-item">
              </ul>
				</div>        
		</div>
	  </div>
</div>
<h3 class="text-center mb-5">Registrasi User</h3>
   <div class="container border">
       <form class="m-5" action="{{ route('register') }}" method="POST">
       @csrf         
       <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Cari mahasiswa</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                        <i class="fa fa-search"></i>  
                        </div>
                        </div> 
                        <input id="text1" name="text1" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">    
                <label for="text2" class="col-4 col-form-label">Daftar sebagai</label> 
                    <div class="col-8">
                    <select name="role" id="role" class="form-control">
                        <option value="0">Mahasiswa</option>
                        <option value="1">Dosen</option>
                    </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">   
                <label for="text2" class="col-4 col-form-label">Nama lengkap</label> 
                    <div class="col-8">
                    <input id="text2" name="nama_lengkap" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">    
                <label for="texte" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                    <input id="texte" name="email" type="email" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">    
                    <label for="text" class="col-4 col-form-label">Asal prodi</label>
                    <div class="col-8"> 
                    <select name="prodi" id="text" class="form-control">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Username</label> 
                    <div class="col-8">
                    <input id="text3" name="username" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="text4" class="col-4 col-form-label">Password</label> 
                    <div class="col-8">
                    <input id="text4" name="password" type="password" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="text5" class="col-4 col-form-label">Cek password</label> 
                    <div class="col-8">
                    <input id="text5" name="password_confirmation" type="password" class="form-control">
                    </div>
                </div>
                <br> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
   </div>
   <br>
@endsection
