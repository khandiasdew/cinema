<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <title>@yield('title') Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            .gambar{
                height: 100px;
                width: 50px;
            }
        </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<body>
    @yield('header')
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('film.show') }}" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                film
                            </a>

                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">film</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('booking.index') }}">booking</a>
                        </li>

                    </ul>
                    </div>
            </div>
        </div>
    </nav>
    <hr>
    <div>
    </div>
    @yield('content')
    <center class="mt-5">
        <h1><a href="{{ Route('film.index') }}" style="color: black">Film</a></h1>
        <a class="btn btn-primary" href={{ route('film.create')}}>
            <i class="fas fa-seedling"></i>
            add
        </a>
    </center>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Film</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($film as $item)
                <tr>
                    <td scope="row">{{ $i }}.   </td>
                    <td scope="row">{{ $item->judul_film }}</td>
                    <td class="gambar"> <img src="{{ asset('public/Image/'.$item->gambar) }}" alt="" title="" width="50px" height="50px"/>
                    </td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->durasi }} menit</td>
                    <td>
                        <a class="btn btn-success" href={{ url('/film/'.$item->id_film.'/edit')}}>
                            <i class="fas fa-edit"></i>
                            Edit
                        </a>
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-danger"  href="/film/{{ $item->id_film}}/delete">
                            <i class="fas fa-eraser"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@yield('footer')

</html>
