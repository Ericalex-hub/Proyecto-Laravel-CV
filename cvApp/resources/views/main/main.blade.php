@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<section class="hero">
    <div class="hero-tittle">
        <h2>Curriculums</h2>
    </div>
    <div class="hero-text">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Facere velit rem quam odit praesentium exercitationem nam
            libero temporibus ratione! Voluptatum veritatis nulla
            officiis neque commodi reiciendis, dolorem fugiat corrupti
            sapiente!
        </p>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quo temporibus mollitia molestiae exercitationem, ullam
            quidem assumenda praesentium perferendis quasi unde illum
            possimus porro nostrum provident ea tempore aliquam? Magnam,
            dolore!
        </p>
    </div>
</section>
<section class="cuerpo">
    <div class="img"><img src="{{ asset('assets/img/cv3.png') }}" alt="No se encontro la imagen"></div>
    <div class="cont">
        <div class="cuerpo-tittle">
            <h1>Crea el CV ideal</h1>
        </div>
        <div class="cuerpo-text">
            <ul>
                <li>Elige una plantilla de nuestra selección personalizada</li>
                <li>Usa nuestro contenido redactado por expertos y edítalo</li>
                <li>Descarga tu currículum y presenta tu candidatura</li>
            </ul>
        </div>
    </div>
</section>
@endsection