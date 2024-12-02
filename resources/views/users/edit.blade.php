@extends('layouts.admin')

@section('content')
<div class="container" style="background-color: #fff;">
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control transition" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control transition" id="email" name="email" value="{{ $user->email }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control transition" id="password" name="password">
                <small class="text-muted">Dejar en blanco para mantener la contraseña actual</small>
            </div>
            <div class="col-md-6">
                <label for="rol" class="form-label">Rol</label>
                <select class="form-select transition" id="rol" name="rol" required>
                    <option value="administrador" {{ $user->rol == 'administrador' ? 'selected' : '' }}>Administrador</option>
                    <option value="trabajador" {{ $user->rol == 'trabajador' ? 'selected' : '' }}>Trabajador</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control transition" id="cargo" name="cargo" value="{{ $user->cargo }}">
            </div>
            <div class="col-md-6">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control transition" id="celular" name="celular" value="{{ $user->celular }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control transition" id="direccion" name="direccion" value="{{ $user->direccion }}">
            </div>
            <div class="col-md-6">
                <label for="fotografia" class="form-label">Fotografía</label>
                <input type="file" class="form-control transition" id="fotografia" name="fotografia">
                @if ($user->fotografia)
                    <img src="{{ asset('storage/' . $user->fotografia) }}" alt="Fotografía del usuario" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-save transition">Guardar Cambios</button>
            <a href="{{ route('users.index') }}" class="btn btn-cancel transition ml-3">Cancelar</a>
        </div>
    </form>
</div>
@endsection

<style>
    /* Estilos de transición para botones y campos */
    .transition {
        transition: all 0.3s ease-in-out;
    }

    /* Encabezado */
    h1 {
        color: #fff;
        background-color: #1976d2; /* Azul fuerte */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-size: 2rem;
    }

    /* Campos de entrada */
    .form-control, .form-select {
        background-color: #e3f2fd; /* Azul muy claro */
        border: 1px solid #90caf9; /* Azul suave */
        color: #0d47a1;
    }

    .form-control:focus, .form-select:focus {
        background-color: #bbdefb; /* Azul más intenso */
        border-color: #42a5f5; /* Azul brillante */
        box-shadow: 0 0 5px rgba(66, 165, 245, 0.7);
    }

    /* Botones */
    .btn {
        border-radius: 5px;
        padding: 12px 20px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Estilo del botón "Guardar Cambios" */
    .btn-save {
        background-color: #1e88e5; /* Azul */
        color: white;
    }

    /* Estilo del botón "Cancelar" */
    .btn-cancel {
        background-color: #ffeb3b; /* Amarillo */
        color: black;
    }

    /* Cambio de color al pasar el cursor sobre los botones */
    .btn-save:hover {
        background-color: #444dca; /* Amarillo dorado */
        color: black;
    }

    .btn-cancel:hover {
        background-color: #f57f17; /* Amarillo más oscuro */
        color: black;
    }

    /* Animación en los campos de entrada al estar enfocados o al pasar el cursor */
    .form-control:hover, .form-select:hover {
        background-color: #bbdefb; /* Azul más fuerte */
        border-color: #42a5f5;
    }

    .form-control:focus, .form-select:focus {
        background-color: #bbdefb;
        border-color: #42a5f5;
        box-shadow: 0 0 5px rgba(66, 165, 245, 0.7);
    }
</style>
