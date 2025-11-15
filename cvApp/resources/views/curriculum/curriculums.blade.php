@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="container px-4 py-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        @foreach($curriculums as $curriculum)
        <div class="col tarjeta-cv">
            <a href="{{ route('curriculums.show', $curriculum->id) }}">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: {{ 'url(assets/img/portada.jpg)' }};
                           background-position: center; background-repeat: no-repeat;
                           background-size: cover;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="color: #111">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"  style="font-size: 2rem; text-align:center;">CV de:</h3>
                        <h3 style="text-align:center;">{{ $curriculum->nombre }}</h3>
                        <h3 style="text-align:center;">{{ $curriculum->apellidos }}</h3>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection