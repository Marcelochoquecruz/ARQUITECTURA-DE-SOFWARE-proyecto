@extends('layouts.admin') 

@section('content')
<style>
    /* General styles */
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 2rem;
        color: #003366; /* Dark blue */
        text-align: center;
        font-weight: bold;
        text-shadow: 1px 1px 4px #ffe680; /* Subtle yellow glow */
    }

    /* Header styles */
    .card-header {
        background-color: #003366; /* Dark blue */
        color: #ffe680; /* Yellow */
        text-align: center;
        font-size: 1.25rem;
        font-weight: bold;
        text-shadow: 1px 1px 2px #000;
        border-radius: 10px 10px 0 0; /* Rounded corners at the top */
    }

    /* Button styles */
    .btn-success, .btn-secondary {
        border: none;
        color: #fff;
        transition: all 0.3s ease-in-out;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-success {
        background-color: #004d99; /* Medium blue */
    }

    .btn-success:hover {
        background-color: #ffe680; /* Yellow */
        color: #003366; /* Dark blue */
    }

    .btn-secondary {
        background-color: #004d99; /* Gray */
    }

    .btn-secondary:hover {
        background-color: #ffe680; /* Yellow */
        color: #003366; /* Dark blue */
    }

    /* Input field styles */
    .form-control {
        border: 2px solid #004d99; /* Medium blue */
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #ffe680; /* Yellow */
        box-shadow: 0 0 5px #ffe680; /* Glow effect */
    }

    /* Label styles */
    .form-label {
        font-weight: bold;
        color: #003366; /* Dark blue */
    }

    /* Card shadow */
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="content p-4">
    <h1 class="mb-4">Actualizar datos del curso</h1>
    
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title mb-0"><b>Datos</b></h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/grados',$grado->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="row g-3">
                            <!-- Nombre Completo -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_curso" class="form-label">Nombre del curso</label>
                                    <input type="text" name="nombre_curso" value="{{ $grado->nombre_curso }}" class="form-control">
                                </div>
                            </div>

                            <!-- Dirección -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="otro1" class="form-label">Maestro a cargo</label>
                                    <input type="text" name="otro1" value="{{ $grado->otro1 }}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="otro2" class="form-label">Hora de ingreso</label>
                                    <input type="text" name="otro2" value="{{ $grado->otro2 }}" class="form-control">
                                </div>
                            </div>

                            <!-- Fecha de Nacimiento -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="otro3" class="form-label">Hora de salida</label>
                                    <input type="text" name="otro3" value="{{ $grado->otro3 }}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('grados.index') }}" class="btn btn-secondary me-2">Regresar</a>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
