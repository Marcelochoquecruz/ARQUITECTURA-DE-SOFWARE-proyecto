@extends('layouts.admin')  

@section('content')
<div class="container" style="background-color: white;">
    <h1>Gestión de Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Agregar Usuario</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ucfirst($user->rol) }}</td>
                    <td>{{ $user->cargo }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<style>
    /* Encabezado */
    h1 {
        color: white;
        background-color: #0288d1; /* Azul más intenso */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-size: 2rem;
        text-align: center;
        font-weight: bold;
        background: linear-gradient(135deg, #0288d1, #1e88e5); /* Gradiente azul */
    }

    /* Estilos de la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border: 2px solid #0288d1; /* Bordes de la tabla en azul */
    }

    th {
        background-color: #0288d1;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f5f5f5; /* Fondo gris claro para filas pares */
    }

    tr:nth-child(odd) {
        background-color: #ffffff; /* Fondo blanco para filas impares */
    }

    /* Cambio de fondo al pasar el cursor por las filas */
    th:hover {
        background-color: #ffeb3b; /* Amarillo claro */
        transition: background-color 0.3s ease;
    }

    /* Botones */
    .btn {
        border-radius: 5px;
        padding: 12px 20px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Botón principal (Agregar Usuario) */
    .btn-primary {
        background-color: #0288d1;
        color: white;
    }

    .btn-primary:hover {
        background-color: #ffeb3b; /* Amarillo al pasar el cursor */
        transition: background-color 0.3s ease;
    }

    /* Botón Editar */
    .btn-warning {
        background-color: #ffb300; /* Amarillo */
        color: black;
    }

    .btn-warning:hover {
        background-color: #fbc02d;
        transform: scale(1.05);
    }

    /* Botón Eliminar */
    .btn-danger {
        background-color: #d32f2f; /* Rojo */
        color: white;
    }

    .btn-danger:hover {
        background-color: #c62828;
        transform: scale(1.05);
    }

    /* Campos de entrada */
    .form-control, .form-select {
        background-color: #e3f2fd; /* Azul muy claro */
        border: 1px solid #90caf9; /* Azul suave */
        color: #0277bd;
        transition: all 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        background-color: #bbdefb; /* Azul más intenso */
        border-color: #1e88e5; /* Azul brillante */
        box-shadow: 0 0 5px rgba(66, 165, 245, 0.7);
    }

    .form-control:hover, .form-select:hover {
        background-color: #bbdefb; /* Azul más fuerte */
        border-color: #42a5f5;
    }
</style>
