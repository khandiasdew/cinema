<!doctype html>
<html lang="en">
@include('layouts.cardfilm')
<head>
@yield('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="image">
    {{-- @yield('navbar') --}}

    <ul class="nav ml-2">
        <li class="nav-item" id="home">
            <a class="nav-link active" aria-current="page" href="{{ route('film.index') }}">
                <div>
                    <h1 style="color: black;">CLover Cinema</h1>
                </div>
            </a>
        </li>
    </ul>
    <ul class="nav justify-content-center">

        <img src="{{ asset('public/Image/The-Demon-of-Black-Clover-by-penyawang.png.png') }}" alt="">
        <li class="nav-item">
            <a class="nav-link btn btn-danger text-white" href="{{ route('booking.create') }}">BookingSeat</a>
        </li>
    </ul>
    {{-- @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif --}}
    @yield('layer')
    <div>
        <div class="container">
            <h3>
                Sekilas
            </h3>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Konten utama -->
                    <p>
                        Web bioskop ini dibuat untuk memberikan pengalaman menonton film yang luar biasa bagi para penonton.
                        Kami menyajikan film-film terbaru dan terbaik dari seluruh dunia, dengan teknologi terkini yang
                        memastikan kualitas gambar dan suara yang luar biasa.

                        Kami memiliki beragam pilihan film dari berbagai genre, sehingga Anda dapat menemukan sesuatu yang
                        sesuai dengan selera Anda. Kami juga memperhatikan kenyamanan Anda dengan menyediakan fasilitas yang
                        lengkap, seperti snack bar dan tempat duduk yang nyaman.

                        Kami memiliki komitmen yang kuat untuk menyediakan pengalaman menonton yang tidak terlupakan bagi
                        para penonton. Kami juga menyediakan harga tiket yang terjangkau untuk seluruh keluarga, sehingga
                        Anda dapat menonton film favorit Anda tanpa harus khawatir tentang biaya.

                        Kami juga menawarkan program diskon dan promosi bagi pelanggan setia kami. Anda dapat menikmati film
                        favorit Anda dengan harga yang lebih murah dan juga mendapatkan akses ke acara-acara khusus yang
                        kami adakan.

                        Kami memperhatikan keamanan dan kesehatan para penonton kami dengan menjaga lingkungan yang bersih
                        dan sehat. Kami juga memberikan pengalaman menonton yang nyaman dengan menyediakan tempat duduk yang
                        cukup dan juga menjaga jarak sosial untuk mencegah penyebaran virus.

                        Kami menjadi tujuan utama untuk menonton film terbaru dan terbaik di kota ini. Kami senantiasa
                        berusaha untuk memberikan pengalaman menonton yang memuaskan bagi para penonton kami. Kami juga
                        terus meningkatkan fasilitas dan layanan kami untuk memberikan pengalaman menonton yang lebih baik.

                        Jangan ragu untuk mengunjungi kami dan menonton film favorit Anda. Kami akan senantiasa siap untuk
                        memberikan pengalaman menonton yang luar biasa bagi Anda. Terima kasih atas dukungan Anda dan kami
                        tunggu kedatangan Anda.
                    </p>
                </div>
                <div class="row" style="height: 100vh">
                    @yield('film')
                </div>
                {{-- <h1>FILM</h1> --}}


            </div>
        </div>

    </div>
</body>
<footer>
    <div class="container">
        <div class="row">
                <div class="text-center mb-1">
                    <p>Copyright ©2022 Bioskop</p>
                    <a href="{{ route('admin.index') }}" style="color: rgb(98, 95, 95)">About Us</a>
                    <a href="{{ route('film.index') }}" style="color: rgb(98, 95, 95)">Contact Us</a>
            </div>
            </div>
        </div>
    </div>
</footer>

</html>
