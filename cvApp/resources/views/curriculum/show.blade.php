@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<main class="custom-cards">
    <div class="tittle-card-s cards-show">
        <h1>{{ $curriculum->nombre }}, {{ $curriculum->apellidos }}</h1>
    </div>
    <div class="contenedor" style="display: flex;">
        @if($curriculum->image)
        <p class="lead">
            <img src="{{ $curriculum->getPath() }}" with="30%" alt="No se encontro la imagen">
        </p>
        @endif
        @if($curriculum->isPdf())
            <p class="lead">
                <img src="{{ $curriculum->getPdf() }}" with="30%">
            </p>
        @endif
        <p class="lead" style ="margin: 0px 25px;">
            Name: {{ $curriculum->nombre }}
            <br>
            Surname: {{ $curriculum->apellidos }}
            <br>
            Mobile: {{ $curriculum->teléfono }}
            <br>
            Email: {{ $curriculum->correo }}
            <br>
            Born: {{ $curriculum->fecha_nacimiento }}
            <br>
            Calification: {{ $curriculum->nota_media }}
            Experience: {{ $curriculum->exoeriensia }}
            <br>
            Formation: {{ $curriculum->formación }}
            <br>
            Skills: {{ $curriculum->habilidades }}
            <br>
            <a href="{{ asset('storage/' . $curriculum->pdf) }}" target="_blank" rel="noopener noreferrer">
                Ver PDF
            </a>
        </p>
    </div>
</main>

<table style="width: 100%; display: flex; justify-content:center; align-items: center; height:100px;">
    <tbody>
        <tr>
            <td>
                <a href="{{ route('curriculums.edit', $curriculum->id) }}" class="btn btn-success btn-sm" style="font-size:2rem;">edit</a>
                <a
                    data-href="{{ route('curriculums.destroy', $curriculum->id) }}"
                    data-curriculum="{{ $curriculum->nombre }}"
                    class="link-destroy btn btn-success btn-sm"
                    style="font-size:2rem; background: red; border:none;">
                    delete
                </a>
            </td>
        </tr>
    </tbody>
</table>

<form action="" method="post" id="form-delete">
    @csrf
    @method('delete')
</form>

<script>
    const aDestroys = document.querySelectorAll('.link-destroy');
    const form = document.getElementById('form-delete');

    aDestroys.forEach(item => {
        item.addEventListener('click', () => {
            if(confirm('Seguro que quieres borrar el curriculums ' + item.dataset.curriculum + ' ?')) {
                form.action = item.dataset.href;
                form.submit();
            }
        });
    });
</script>

@endsection