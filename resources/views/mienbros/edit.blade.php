@extends('layouts.admin')

@section('content')
<div class="content p-4">
    <h1 class="mb-4">Actualizar datos del estudiante</h1>
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h3 class="mb-0"><b>Datos</b></h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/mienbros', $mienbro->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nombre_completo">Nombre Completo</label>
                        <input type="text" name="nombre_completo" value="{{ $mienbro->nombre_completo }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" value="{{ $mienbro->direccion }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="telefono">Teléfono</label>
                        <input type="number" name="telefono" value="{{ $mienbro->telefono }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" value="{{ $mienbro->fecha_nacimiento }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="genero">Género <b>*</b></label>
                        <select name="genero" class="form-select">
                            <option value="">Seleccione</option>
                            <option value="M" {{ old('genero', $mienbro->genero) == 'M' ? 'selected' : '' }}>M</option>
                            <option value="F" {{ old('genero', $mienbro->genero) == 'F' ? 'selected' : '' }}>F</option>
                        </select>
                        @error('genero') <small style="color: red">* Este campo es requerido</small> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="grado_id">Grado</label>
                        <select name="grado_id" class="form-select">
                            <option value="">Seleccione un grado</option>
                            @foreach ($grados as $grado)
                                <option value="{{ $grado->id }}" {{ $mienbro->grado_id == $grado->id ? 'selected' : '' }}>
                                    {{ $grado->nombre_curso }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $mienbro->email }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="fotografia">Fotografía <b>*</b></label>
                        <input type="file" id="file" name="fotografia" class="form-control" accept="image/*">
                        <center>
                            <output id="list">
                                @if(empty($mienbro->fotografia))
                                    <img src="{{ $mienbro->genero == 'M' ? url('images/avatarH.jpg') : url('images/avatarM.jpg') }}" alt="Avatar">
                                @else
                                    <img src="{{ asset('storage/' . $mienbro->fotografia) }}" width="150px" alt="Fotografía">
                                @endif
                            </output>
                        </center>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('mienbros.index') }}" class="btn btn-anim me-2">Regresar</a>
                    <button type="submit" class="btn btn-anim btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('file').addEventListener('change', function (evt) {
        const files = evt.target.files;
        const output = document.getElementById("list");
        output.innerHTML = ""; // Limpiar la previsualización anterior

        if (!files.length) {
            output.innerHTML = `<small class="text-muted">No se ha seleccionado ninguna imagen.</small>`;
            return;
        }

        const file = files[0];
        if (!file.type.match('image.*')) {
            output.innerHTML = `<div class="alert alert-warning" role="alert">El archivo seleccionado no es una imagen válida.</div>`;
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            output.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded shadow-sm" alt="Previsualización" width="50%">`;
        };
        reader.readAsDataURL(file);
    });
</script>

@endsection

<style>
    .btn-anim, .form-control, .form-select {
        transition: all 0.3s ease-in-out;
    }

    .btn-anim {
        background-color: #007bff; 
        color: white;
        border: 2px solid #ffd700;
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 8px;
    }

    .btn-anim:hover {
        background-color: #ffd700; 
        color: #007bff; 
        transform: scale(1.1);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .form-control, .form-select {
        border-radius: 8px;
        border: 2px solid #007bff;
    }

    .form-control:hover, .form-select:hover {
        border-color: #ffd700; 
        background-color: #e6f2ff;
        transform: scale(1.02);
    }

    .card-header {
        background-color: #040d90; 
        border-bottom: 2px solid #040d90;
    }

    .card-header h3 {
        color: white;
    }
</style>
