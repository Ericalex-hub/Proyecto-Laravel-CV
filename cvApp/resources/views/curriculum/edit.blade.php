@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<form class="crear-curriculum" action="{{ route('curriculums.update', $curriculum->id) }}" method="post">
    @csrf
    @method('put')
    <div class="part-total">
        <div class="part-1">
            <div class="espacio">
                <label for="nombre">Name</label>
                <input required id="nombre" name="nombre" placeholder="Your name" value="{{ old('nombre')}}" type="text" class="form-control">
            </div>
            <div class="espacio">
                <label for="apellidos">Surname</label>
                <input required id="apellidos" name="apellidos" placeholder="Your surname" value="{{old('apellidos')}}" type="text" class="form-control">
            </div>
            <div class="espacio">
                <label for="teléfono">Phone</label>
                <input required id="teléfono" name="teléfono" placeholder="The number of phone" value="{{old('teléfono')}}" type="tel" class="form-control">
            </div>
            <div class="espacio">
                <label for="correo">Email</label>
                <input required id="correo" name="correo" placeholder="Your email" value="{{old('correo')}}" type="email" class="form-control">
            </div>
            <div class="espacio">
                <label for="fecha_nacimiento">Date of born</label>
                <input required id="fecha_nacimiento" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" type="date" class="form-control">
            </div>
            <div class="espacio">
                <label for="iimagema">Image</label>
                <input class="form-control" id="image" name="image" type="file">
            </div>
        </div>
        <div class="part-2">
            <div class="espacio">
                <label for="nota_media">Calification</label>
                <input required id="nota_media" name="nota_media" placeholder="Your calification" value="{{old('nota_media')}}" type="number" min="0" step="0.01" class="form-control">
            </div>
            <div class="espacio">
                <label for="experiencia">Experience</label>
                <input required id="experiencia" name="experiencia" placeholder="Your experience" value="{{old('experiencia')}}" type="text" class="form-control">
            </div>
            <div class="espacio">
                <label for="formación">Formation</label>
                <input required id="formación" name="formación" placeholder="Your formation" value="{{old('formación')}}" type="text" class="form-control">
            </div>
            <div class="espacio">
                <label for="habilidades">Skills</label>
                <input required id="habilidades" name="habilidades" placeholder="Your skills" value="{{old('habilidades')}}" type="text" class="form-control">
            </div>
            <div class="espacio">
                <label for="pdf">Pdf of CV</label>
                <input class="form-control" id="pdf" name="pdf" type="file">
            </div>
        </div>
    </div>
    <div class="espacio">
        <input class="btn btn-primary" value="Update the cv" type="submit">
    </div>
</form>
@endsection