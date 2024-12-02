@extends('layouts.admin') 

@section('content')
<div class="container" style="background-color: white; padding: 15px; border-radius: 8px;">
    <h1 class="mb-3">Agregar Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Fila 1: Nombre y Email -->
            <div class="col-md-6 mb-2">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control transition" id="name" name="name" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control transition" id="email" name="email" required>
            </div>
        </div>
        
        <div class="row">
            <!-- Fila 2: Contraseña y Confirmar Contraseña -->
            <div class="col-md-6 mb-2">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control transition" id="password" name="password" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control transition" id="password_confirmation" name="password_confirmation" required>
            </div>
        </div>

        <div class="row">
            <!-- Fila 3: Rol y Cargo -->
            <div class="col-md-6 mb-2">
                <label for="rol" class="form-label">Rol</label>
                <select class="form-select transition" id="rol" name="rol" required>
                    <option value="administrador">Administrador</option>
                    <option value="trabajador">Trabajador</option>
                </select>
            </div>
            <div class="col-md-6 mb-2">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control transition" id="cargo" name="cargo">
            </div>
        </div>

        <div class="row">
            <!-- Fila 4: Celular y Dirección -->
            <div class="col-md-6 mb-2">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control transition" id="celular" name="celular">
            </div>
            <div class="col-md-6 mb-2">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control transition" id="direccion" name="direccion">
            </div>
        </div>

        <div class="row">
            <!-- Fila 5: Fotografía -->
            <div class="col-md-12 mb-2">
                <label for="fotografia" class="form-label">Fotografía</label>
                <input type="file" class="form-control transition" id="fotografia" name="fotografia">
            </div>
        </div>

        <div class="row justify-content-end">
            <!-- Botones -->
            <div class="col-md-2">
                <button type="submit" class="btn btn-save transition">Guardar</button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('users.index') }}" class="btn btn-cancel transition">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection

<style>
    /* Estilos para la animación */
    .transition {
        transition: all 0.3s ease-in-out;
    }

    /* Estilo del encabezado */
    h1 {
        color: #fff;
        background-color: #0d47a1; /* Azul oscuro */
        padding: 8px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Estilo de los campos de texto y selección */
    .form-control, .form-select {
        background-color: #e3f2fd; /* Azul muy claro */
        border: 1px solid #90caf9; /* Azul suave */
        color: #1e3a8a;
    }

    .form-control:focus, .form-select:focus {
        background-color: #bbdefb; /* Azul más intenso */
        border-color: #42a5f5; /* Azul brillante */
        box-shadow: 0 0 5px rgba(66, 165, 245, 0.7);
    }

    /* Botones */
    .btn {
        border-radius: 5px;
        padding: 8px 16px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Estilo del botón "Guardar" */
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
    .btn:hover {
        background-color: #ffeb3b; /* Amarillo */
        color: black;
    }

    .btn-cancel:hover {
        background-color: #ffcc00; /* Amarillo más oscuro */
        color: black;
    }

    .btn-save:hover {
        background-color: #444dca; /* Amarillo */
        color: black;
    }

    /* Cambio de color en los campos al pasar el cursor */
    .form-control:hover, .form-select:hover {
        background-color: #bbdefb; /* Azul más fuerte */
        border-color: #42a5f5;
    }

    /* Cambio de color en los campos al estar enfocados */
    .form-control:focus, .form-select:focus {
        background-color: #bbdefb;
        border-color: #42a5f5;
        box-shadow: 0 0 5px rgba(66, 165, 245, 0.7);
    }
</style>
