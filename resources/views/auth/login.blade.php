@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (session('error'))
    <div class="alert alert-danger">
     {{session('error')}}
    </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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
                  <a class="nav-link" href="/seminar">Daftar Seminar</a>
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
   
    <div class="container">
      <h3 class="text-center">Login</h3>
      <div class="container border m-5">
        <form action="{{ route('login') }}" method="POST">
        @csrf    
        <div class="form-group m-4">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group m-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary m-3 ">{{ __('Login') }}</button>
            <a href="/register">Registrasi user</a>
        </form>
      </div>
    </div>
@endsection
