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
        background-color: #103366; /* Dark blue */
        color: #ffe680; /* Yellow */
        text-align: center;
        font-size: 1.25rem;
        font-weight: bold;
        text-shadow: 1px 1px 2px #000;
    }

    /* Button styles */
    .btn-primary {
        background-color: #004d99; /* Medium blue */
        border: none;
        color: #fff;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #ffe680; /* Yellow */
        color: #003366; /* Dark blue */
    }

    .btn-secondary {
        background-color: #004d99;
        border: none;
        color: #fff;
        transition: all 0.3s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #ffe680; /* Yellow */
        color: #003366; /* Dark blue */
    }

    /* Input field styles */
    .form-control {
        border: 1px solid #004d99;
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
    <h1 class="mb-4">Creación de Cursos</h1>
    
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0"><b>Insertar Datos</b></h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/grados') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <!-- Nombre Curso -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre_curso" class="form-label">Nombre del Curso</label><b></b>
                                    <input type="text" name="nombre_curso" value="{{old('nombre_curso')}}" class="form-control" required placeholder="Ej. robótica">
                                    @error('nombre_curso')
                                    <small style="color: red">* Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                            <!-- Dirección -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="otro1" class="form-label">Maestro a cargo</label><b></b>
                                    <input type="text" name="otro1" value="{{old('otro1')}}" class="form-control" placeholder="Gonzalo Huarachi" required>
                                    @error('otro1')
                                    <small style="color: red">* Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="otro2" class="form-label">Hora de ingreso</label><b></b>
                                    <input type="text" name="otro2" value="{{old('otro2')}}" class="form-control" placeholder="00:00 p.m/a.m" required>
                                    @error('otro2')
                                    <small style="color: red">* Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                            <!-- Fecha de Nacimiento -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="otro3" class="form-label">Hora de salida</label><b></b>
                                    <input type="text" name="otro3" value="{{old('otro3')}}" class="form-control" placeholder="00:00 p.m/a.m" required>
                                    @error('otro3')
                                    <small style="color: red">* Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="btn btn-secondary me-2">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
