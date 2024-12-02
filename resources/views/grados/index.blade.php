@extends('layouts.admin')

@section('content')
  <div class='content p-4'>
      <h2 class="mb-4" style="color: #007BFF;">Listado de cursos</h2>

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
              <div class="card-header" style="background-color: #004B87; color: white; text-align: center; border-radius: 10px;">
                <h3 class="card-title"><b>Cursos Registrados</b></h3>
                <div class="card-tools">
                  <a href="{{url('/grados/create')}}" class="btn btn-primary" style="transition: background-color 0.3s, color 0.3s;">
                    <i class="bi bi-file-plus"></i> Agregar nuevo curso
                  </a>
                </div>
              </div>
          
              <div class="card-body" style="display: block;">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Nro</th>
                      <th>Nombre del Curso</th>
                      <th>Maestro a Cargo</th>
                      <th>Hora de Ingreso</th>
                      <th>Hora de Salida</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $conta = 0; ?>
                      @foreach($grados as $grado)
                          <tr>
                              <td>{{ ++$conta }}</td>
                              <td>{{ $grado->nombre_curso }}</td>
                              <td>{{ $grado->otro1 }}</td>
                              <td>{{ $grado->otro2 }}</td>
                              <td>{{ $grado->otro3 }}</td>
                              <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                  <a href="{{ url('grados', $grado->id) }}" class="btn btn-info" style="transition: background-color 0.3s, color 0.3s;">
                                      <i class="fas fa-eye"></i>
                                  </a>
                                  <a href="{{ route('grados.edit',$grado->id) }}" class="btn btn-warning" style="transition: background-color 0.3s, color 0.3s;">
                                      <i class="fas fa-edit"></i>
                                  </a>
                                  <form action="{{ route('grados.destroy', $grado->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger" style="transition: background-color 0.3s, color 0.3s;">
                                      <i class="fas fa-trash-alt"></i>
                                    </button>
                                  </form>
                                </div>
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
                        "infoPostFix": "", 
                        "thousands": ",", 
                        "lengthMenu": "Mostrar _MENU_ Estudiantes ", 
                        "loadingRecords": "Cargando...", 
                        "processing": "Procesando...", 
                        "search": "Buscador:", 
                        "zeroRecords": "Sin resultados encontrados", 
                        "paginate": { 
                          "first": "Primero", 
                          "last": "Último", 
                          "next": "Siguiente", 
                          "previous": "Anterior" 
                        } 
                      },
                      "responsive": true, "lengthChange": true, "autoWidth": false, 
                      "buttons": [{ 
                        "extend": "collection", 
                        "text": "Reportes", 
                        "orientation": "landscape", 
                        "buttons": [{ 
                          "text": "Copiar", 
                          "extend": "copy" 
                        }, { 
                          "extend": "pdf" 
                        }, { 
                          "extend": "csv" 
                        }, {
                          "extend": "excel" 
                        }, { 
                          "text": "Imprimir", 
                          "extend": "print" 
                        } 
                        ] 
                      }, 
                        {
                          "extend": "colvis",  
                          "text": "Visor de columnas",  
                          "collectionLayout": "fixed one-column",  
                          "columnText": function (dt, idx, title) {  
                            return title;  
                          },
                          "columnVisibility": true,  
                          "prefix": "Mostrar/Ocultar columnas: ",  
                          "className": "btn btn-info"  
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
    .btn {
        transition: background-color 0.3s, color 0.3s, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #FFD700; /* Amarillo */
        color: #004B87; /* Azul */
        transform: scale(1.05);
    }

    /* Animación para los campos */
    .form-control {
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #FFD700; /* Amarillo */
        box-shadow: 0 0 5px rgba(255, 215, 0, 0.8); /* Amarillo */
    }
    .card {
    border-radius: 15px;
    }

    /* Estilo del encabezado */
    .card-header {
        background-color: #004B87;
        color: white;
        font-size: 1.5rem;
        text-align: center;
    }

    /* Color de fondo y bordes de la tabla */
    .table {
        background-color: #f2f9fc;
        
    }

    .table-bordered {
        border: 1px solid #004B87;
    }

    .table th, .table td {
        text-align: center;
    }

    .table thead {
        background-color: #007BFF;
        color: white;
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #e7f4fe;
    }

    .table-striped tbody tr:nth-child(even) {
        background-color: #f0f7fd;
    }
  </style>
@endsection
