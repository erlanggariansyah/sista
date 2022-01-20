<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CMS - Siumni</title>
    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        #sidebar {
            /* don't forget to add all the previously mentioned styles here too */
            background: #646464;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #0F0F0F;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #0F0F0F;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #0F0F0F;
            background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #0F0F0F;
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #0F0F0F;
        }
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .btn-custom {
            background-color: #0F0F0F;
            color: #ffffff;
        }

        .btn-custom:hover {
            background-color: #ffffff;
            color: #0F0F0F;
        }

        .btn:focus, .btn:active, .btn:hover{
            box-shadow: none!important;
            outline: 0;
        }

        .center {
            text-align: center;
        }

        .body {
            display: flex;
            width: 80%;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="center">SISTA-Backend</h3>
            </div>

            <div class="sidebar-header center">
                <div id="search">
                    <form class="form-inline">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                          aria-label="Search">
                      </form>
                </div>
            </div>
    
            <ul class="list-unstyled components">
                <p class="center"><i class="fa fa-user"></i> &nbsp; {{ Auth::user()->nama_lengkap; }}</p>
                @if(Auth::user()->role == 1)
                <li>
                    <a href="/dashboard">Dashboard</a>
                </li>
                @endif
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Seminar TA</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/seminar">Kelola Seminar</a>
                        </li>
                        @if(Auth::user()->role == 1)
                        <li>
                            <a href="#">Request Peserta</a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li>
                    <a href="/mahasiswa">Mahasiswa</a>
                </li>
                @if(Auth::user()->role == 1)
                <li>
                    <a href="/dosen">Dosen</a>
                </li>
                @endif
            </ul>
            <ul>
                <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                    <a href="javascript:void" onclick="$('#logout-form').submit();">Logout</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div style="display: inline;">
                        <button type="button" id="sidebarCollapse" class="btn btn-custom">
                            <i class="fas fa-align-left"></i>
                            <span></span>
                        </button>
                        <br>
                        <br>
                        <a href="{{ url()->previous() }}">
                        <button type="button" id="sidebarCollapse" class="btn btn-custom">
                            <i class="fas fa-arrow-left"></i>
                            <span></span>
                        </button>
                        </a>
                        <br>
                        <br>
                        @if(Auth::user()->role == 1)
                        <a href="/dashboard">
                        <button type="button" id="sidebarCollapse" class="btn btn-custom">
                            <i class="fas fa-chart-line"></i>
                            <span></span>
                        </button>
                        </a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
        <div style="width: 100%; background-color: #0000000;">
        <div style="display: flex;">
            <h1 style="position: relative; height: 0.1px; top: 0.8%;">@yield('judul')</h1>    
        </div>
        <div style="width: 100%; display: flex; margin-top: 7%;">
        @yield('body')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
        });
    </script>
  </body>
</html>