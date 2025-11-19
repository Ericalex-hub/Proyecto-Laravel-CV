@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="container px-4 py-5" id="custom-cards">
    <div class="nolose row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        @foreach($curriculums as $curriculum)
        <a href="{{ route('curriculums.show', $curriculum->id) }}">
            <div class="tarjeta-cv">
                <div class="space"></div>
                <div class="info-cv">
                    <h3 class=" fw-bold" >CV de:</h3>
                    <h3>{{ $curriculum->nombre }}</h3>
                    <h3>{{ $curriculum->apellidos }}</h3>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection