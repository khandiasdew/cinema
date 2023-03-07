@extends('admin.adminpage')
@section('header')
@endsection
@section('title')
Admin viewers
@endsection
@section('content')

<div>
    <center class="mt-5">
        <h1>Viewers</h1>
        <a class="nav-link active" aria-current="page" href="{{ route('film.index') }}">
        <h4>film</h4></a>
    </center>

    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">film</th>
                    <th scope="col">Penayangan</th>
                    <th scope="col">No Kursi</th>
                    <th scope="col">pesan</th>
                    <th scope="col">act</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($booking as $item)
                <tr>
                    <td scope="row">{{ $i }}. </td>
                    <td scope="row">{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td scope="row">{{ $item->film->judul_film }}</td>

                    <td>{{ $item->jam_tayang}}</td>
                    <td>{{ $item->no_kursi}}</td>
                    <td>{{ $item->pesan}}</td>
                    <td>

                        @csrf
                        @method('DELETE')
                        <a class="btn btn-info" href="{{ route('booking.show',$item->id_booking) }}">Show</a>

                        <a class="btn btn-danger" href="/booking/{{ $item->id_booking}}/delete">
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


</div>
@endsection
@section('footer')


@endsection
