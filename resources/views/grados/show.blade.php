@extends('layouts.admin') 

@section('content')
<div class="content p-4">
    <h1 class="mb-4" style="color: #0056b3;">Datos del curso</h1>
    
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card shadow-sm" style="border-radius: 15px;">
                <div class="card-header bg-primary text-white" style="border-top-left-radius: 15px; border-top-right-radius: 15px; text-align: center;">
                    <h3 class="card-title mb-0"><b>Datos</b></h3>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Nombre Curso -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre_curso" class="form-label" style="color: #0056b3;">Nombre del curso</label>
                                <input type="text" name="nombre_curso" value="{{ $grado->nombre_curso }}" class="form-control" readonly style="border-radius: 10px;">
                            </div>
                        </div>

                        <!-- Otro1 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="otro1" class="form-label" style="color: #0056b3;">Maestro a Cargo</label>
                                <input type="text" name="otro1" value="{{ $grado->otro1 }}" class="form-control" readonly style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mt-3">
                        <!-- otro2 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="otro2" class="form-label" style="color: #0056b3;">Hora de Ingreso</label>
                                <input type="text" name="otro2" value="{{ $grado->otro2 }}" class="form-control" readonly style="border-radius: 10px;">
                            </div>
                        </div>

                        <!-- Otro3 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="otro3" class="form-label" style="color: #0056b3;">Hora de Salida</label>
                                <input type="text" name="otro3" value="{{ $grado->otro3 }}" class="form-control" readonly style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('grados.index') }}" class="btn btn-secondary me-2" style="border-radius: 10px;">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    /* Animación para los botones */
    .btn {
        transition: background-color 0.3s, color 0.3s, transform 0.3s ease;
        border-radius: 10px;
    }

    .btn:hover {
        background-color: #f9c11c; /* Amarillo */
        color: #003366; /* Azul oscuro */
        transform: scale(1.05);
    }

    /* Estilo para los campos de texto */
    .form-control {
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
        background-color: #f0f7fe; /* Azul suave */
    }

    .form-control:focus {
        border-color: #f9c11c; /* Amarillo */
        box-shadow: 0 0 5px rgba(249, 193, 28, 0.8); /* Amarillo brillante */
    }

    /* Estilo del encabezado */
    .card-header {
        background-color: #004b87; /* Azul fuerte */
        color: white;
        font-size: 1.5rem;
        text-align: center;
        border-radius: 10px;
    }

    /* Estilo de la tarjeta */
    .card {
        background-color: #f7f9fc; /* Fondo muy suave */
        border-radius: 10px;
    }

    /* Animación para los campos */
    .form-control:focus {
        border-color: #f9c11c;
        box-shadow: 0 0 8px rgba(249, 193, 28, 0.7);
    }

    /* Estilo de los botones secundarios */
    .btn-secondary {
        background-color: #0056b3; /* Azul */
        color: white;
        transition: background-color 0.3s ease;
        border-radius: 0px;
    }

    .btn-secondary:hover {
        background-color: #f9c11c; /* Amarillo */
        color: #003366; /* Azul oscuro */
    }

    /* Ajuste para los formularios */
    .form-group label {
        font-size: 1rem;
        font-weight: bold;
        color: #004b87;
    }
</style>
