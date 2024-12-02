@extends('layouts.admin')

@section('content')
<div class="contenedor-principal">
    <div class="container">
        <h1 class="encabezado">Gestión de Asistencias</h1>

        <!-- Alertas de éxito o error -->
        <div id="alertContainer"></div>
        
        <!-- Selector de grados -->
        <div class="form-group mb-4">
            <label for="grado" class="form-label"><strong>Selecciona un Grado:</strong></label>
            <select id="grado" class="form-select campo">
                <option value="">-- Selecciona un Grado --</option>
                @foreach($grados as $grado)
                    <option value="{{ $grado->id }}">{{ $grado->nombre_curso }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tabla de estudiantes -->
        <form id="asistenciaForm" class="card sombra">
            @csrf
            <div class="card-header encabezado-tabla">
                <strong>Lista de Estudiantes</strong>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th class="text-center">Presente</th>
                            <th>WhatsApp</th>
                        </tr>
                    </thead>
                    <tbody id="estudiantes">
                        <tr>
                            <td colspan="4" class="text-center py-3">Selecciona un grado para cargar los estudiantes.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <a href="{{ route('mienbros.index') }}" class="btn boton">Regresar</a>
                <button type="submit" class="btn boton">Guardar Asistencia</button>
            </div>
        </form>
    </div>
</div>

<style>
    .contenedor-principal {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background-color: white; /* Fondo blanco */
        padding: 20px; /* Espaciado interno */
        border-radius: 10px; /* Bordes redondeados opcionales */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra opcional */
    }

    /* Encabezado */
    .encabezado {
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
        background: #0288d1;
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Campos */
    .campo {
        border: 2px solid #0288d1;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
    .campo:hover, .campo:focus {
        border-color: #ffeb3b;
        box-shadow: 0 0 10px rgba(255, 235, 59, 0.7);
    }

    /* Botones */
    .boton {
        background-color: #0288d1;
        color: white;
        border: 2px solid transparent;
        padding: 10px 20px;
        border-radius: 15px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }

    .boton:hover {
        background-color: #ffeb3b;
        color: black;
    }

    /* Encabezado de la tabla */
    .encabezado-tabla {
        background-color: #0288d1;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
        text-align: center;
        padding: 10px;
    }

    /* Sombra para tarjetas */
    .sombra {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
</style>

<script>
    // El código JavaScript se mantiene igual
</script>
@endsection
