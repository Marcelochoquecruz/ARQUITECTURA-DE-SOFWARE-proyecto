@extends('layouts.admin')

@section('content')
<div class='content'>
    <style>
        /* Estilo del encabezado */
        .content h2 {
            text-align: center;
            font-family: 'Arial', sans-serif;
            color: #ffffff;
            background-color: #004aad;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilo de los botones */
        .btn {
            background-color: #004aad;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #ffc107;
            color: #004aad;
            transform: scale(1.1);
        }

        /* Estilo de los campos */
        .form-control, .form-select {
            border: 1px solid #004aad;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus, .form-select:focus {
            border-color: #ffc107;
            box-shadow: 0px 0px 5px #ffc107;
        }

        /* Tablas */
        .table thead {
            background-color: #004aad;
            color: #ffffff;
        }

        .table tbody tr:hover {
            background-color: #ffc107;
            color: #004aad;
        }

        /* Estilo de las tarjetas */
        .card {
            border: 1px solid #004aad;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #004aad;
            color: #ffffff;
            border-bottom: 1px solid #ffc107;
            font-weight: bold;
        }

        .card-title {
            font-family: 'Arial', sans-serif;
            font-size: 1.2em;
        }

        /* Animaciones generales */
        .card:hover {
            transform: scale(1.02);
            transition: all 0.3s ease-in-out;
        }

        input[type="date"]:hover, select:hover {
            background-color: #f0f8ff;
        }
    </style>

    <h2>Gestión de Asistencias</h2>

    @if($message = Session::get('mensaje'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{$message}}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <div class='row'>
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Seleccionar Fecha y Grado</b></h3>
                </div>
                <div class="card-body">
                    <form id="filtersForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="fecha" class="form-label"><b>Fecha:</b></label>
                                <input type="date" id="fecha" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="grado" class="form-label"><b>Grado:</b></label>
                                <select id="grado" class="form-select">
                                    <option value="">-- Selecciona un Grado --</option>
                                    @foreach($grados as $grado)
                                        <option value="{{ $grado->id }}">{{ $grado->nombre_curso }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Listado de Asistencias</b></h3>
                </div>
                <div class="card-body">
                    <table id="asistenciasTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Asistió</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center py-3">Selecciona una fecha y un grado para cargar las asistencias.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
