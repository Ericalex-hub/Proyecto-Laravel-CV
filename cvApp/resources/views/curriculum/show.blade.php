@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<section class="master-contenedor">
    <main class="custom-cards contenido-curriculum">
        <div class="tittle-card-s cards-show titulo-curriculum">
            <h1>{{ $curriculum->nombre }}, {{ $curriculum->apellidos }}</h1>
        </div>
        <div class="contenedor relleno">
            @if($curriculum->image)
            <div class="contenedor-img">
                <img src="{{ $curriculum->getPath() }}" alt="No se encontro la imagen">
            </div>
            @endif
            <p class="lead">
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
                <br>
                Experience: {{ $curriculum->experiencia }}
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
    <table>
        <tbody>
            <tr>
                <td>
                    <a href="{{ route('curriculums.edit', $curriculum->id) }}" class="btn btn-success btn-sm">edit</a>
                    <a
                        data-href="{{ route('curriculums.destroy', $curriculum->id) }}"
                        data-curriculum="{{ $curriculum->nombre }}"
                        class="link-destroy btn btn-success btn-sm">
                        delete
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</section>

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