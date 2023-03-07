@extends('ui.ui')
@section('head')
@include('layouts.cardfilm')
@endsection
@section('title')
Film
@endsection

@section('layer')
@endsection
@section('film')
@if (count ($film) > 0)
<div class="col">
    @foreach ($film as $item)
    <div class="col">
        <center>
            <div class="card">
                <img src="{{ asset('public/Image/'.$item->gambar) }}">
                <div class="descriptions overflow-scroll">
                    <h1>{{ $item->judul_film }}</h1>
                    <span>
                        - {{ $item->durasi }} menit
                        <button class="position-relative">
                            <a href="{{ $item->trailer }}">Trailer
                            </a>
                        </button>
                        <h4>sinopsys:</h4>
                    </span>
                    <p>
                        {{$item->deskripsi}}</p>
                </div>
            </div>
        </div>
        </center>
</div>

@endforeach
@else
<center>
    <h1>
        <h1>tidak ada film yang tayang minggu ini</h1>
        No films are showing this week.
    </h1>
</center>
@endif

@endsection
</div>
</div>
</div>
