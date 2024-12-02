@extends('layouts.admin')

@section('content')
<div class='content'>
    <h2 style="text-align: center; color: #004085;">Listado de estudiantes</h2>

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
                <div class="card-header" style="background-color: #fdfd96;">
                    <h3 class="card-title" style="color: #004085;"><b>Estudiantes Registrados</b></h3>
                    <div class="card-tools">
                        <a href="{{ url('/mienbros/create') }}" class="btn btn-agregar">
                            <i class="bi bi-file-plus"></i> Agregar nuevo estudiante
                        </a>
                    </div>
                </div>

                <div class="card-body" style="display: block;">
                    <table id="example1" class="table table-bordered table-striped table-sm">
                        <thead style="background-color: #004085; color: white;">
                            <tr>
                                <th>Nro</th>
                                <th>nombre_completo</th>
                                <th>telefono</th>
                                <th>genero</th>
                                <th>grado</th>
                                <th>acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 0; ?>
                            @foreach($mienbros as $mienbro)
                                <tr>
                                    <td>{{ ++$contador }}</td>
                                    <td>{{ $mienbro->nombre_completo }}</td>
                                    <td>{{ $mienbro->telefono }}</td>
                                    <td>{{ $mienbro->genero }}</td>
                                    <td>{{ $mienbro->grado->nombre_curso }}</td>
                                    <td>
                                        <center>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <a href="{{ url('mienbros', $mienbro->id) }}" class="btn btn-info btn-anim">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('mienbros.edit', $mienbro->id) }}" class="btn btn-warning btn-anim">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('mienbros.destroy', $mienbro->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-anim">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Estudiantes",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Estudiantes",
                                    "infoFiltered": "(Filtrado de _MAX_ total Estudiantes)",
                                    "search": "Buscador:",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Último",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true,
                                "lengthChange": true,
                                "autoWidth": false,
                                "buttons": [
                                    {
                                        "extend": "collection",
                                        "text": "Reportes",
                                        "buttons": [
                                            { "extend": "copy" },
                                            { "extend": "pdf" },
                                            { "extend": "csv" },
                                            { "extend": "excel" },
                                            { "extend": "print" }
                                        ]
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animación para los botones */
    .btn-anim {
        transition: all 0.3s ease-in-out;
    }

    .btn-anim:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Animación para el botón "Agregar nuevo estudiante" */
    .btn-agregar {
        background-color: #004085; /* Azul */
        color: white;
        border: 2px solid #fdfd96; /* Amarillo */
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        text-decoration: none;
    }

    .btn-agregar:hover {
        background-color: #fdfd96; /* Amarillo */
        color: #004085; /* Azul */
        transform: scale(1.1);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-agregar i {
        margin-right: 5px;
    }

    /* Estilo de las tablas */
    table thead th {
        transition: background-color 0.3s ease-in-out;
    }

    table thead th:hover {
        background-color: #ffc107;
    }
</style>
@endsection
