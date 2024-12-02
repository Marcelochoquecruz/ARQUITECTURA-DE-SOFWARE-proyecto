@extends('layouts.admin') 

@section('content')
<div class="content p-2">
    <h1 class="mb-2">Datos del estudiante</h1>
    
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white py-1">
                    <h3 class="card-title mb-0" style="font-size: 1.2rem;"><b>Datos</b></h3>
                </div>
                <div class="card-body p-2">
                    <div class="row g-1">
                        <!-- Nombre Completo -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="nombre_completo" class="form-label">Nombre Completo</label>
                                <input type="text" name="nombre_completo" value="{{ $mienbro->nombre_completo }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" value="{{ $mienbro->direccion }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row g-1 mt-1">
                        <!-- Teléfono -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="number" name="telefono" value="{{ $mienbro->telefono }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>

                        <!-- Fecha de Nacimiento -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" value="{{ $mienbro->fecha_nacimiento }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row g-1 mt-1">
                        <!-- Género -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="genero" class="form-label">Género</label>
                                <input type="text" name="genero" value="{{ $mienbro->genero == 'M' ? 'Masculino' : 'Femenino' }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>

                        <!-- Grado -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="grado" class="form-label">Grado</label>
                                <input type="text" name="grado" value="{{ $mienbro->grado->nombre_curso }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row g-1 mt-1">
                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" value="{{ $mienbro->email }}" class="form-control form-control-sm" readonly>
                            </div>
                        </div>

                        <!-- Fotografía -->
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="">Fotografía</label> <br>
                                @if(empty($mienbro->fotografia))
                                    @if($mienbro->genero == 'M')
                                        <img src="{{ url('images/avatarH.jpg') }}" alt="Avatar Hombre" class="img-fluid" style="max-height: 80px;">
                                    @else
                                        <img src="{{ url('images/avatarM.jpg') }}"  alt="Avatar Mujer" class="img-fluid" style="max-height: 80px;">
                                    @endif
                                @else
                                    <img src="{{ asset('storage/' . $mienbro->fotografia) }}" alt="Fotografía del Estudiante" class="img-fluid" style="max-height: 80px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('mienbros.index') }}" class="btn btn-secondary me-2 btn-anim">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    /* Animación para botones y campos de entrada */
    .btn-anim, .form-control {
        transition: all 0.3s ease-in-out;
    }

    /* Estilo para los botones */
    .btn-anim {
        background-color: #004085; /* Azul */
        color: white;
        border: 2px solid #fdfd96; /* Amarillo */
        padding: 6px 12px;
        font-weight: bold;
        border-radius: 8px;
        text-decoration: none;
    }

    .btn-anim:hover {
        background-color: #fdfd96; /* Amarillo */
        color: #004085; /* Azul */
        transform: scale(1.1);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Estilo para los campos de entrada */
    .form-control:hover {
        border-color: #fdfd96; /* Amarillo */
        background-color: #f0f8ff; /* Azul claro */
        transform: scale(1.02);
    }

    /* Estilo de los encabezados */
    .card-header {
        background-color: #004085; /* Azul */
    }

    .card-header h3 {
        color: white;
    }

    /* Estilo de las etiquetas de los campos */
    .form-label {
        font-weight: bold;
    }

    /* Estilo para la fila de la fotografía */
    .form-group img {
        border-radius: 10px;
    }

    /* Efecto en las filas al pasar el cursor */
    .form-group:hover {
        background-color: #f7f7f7;
        transform: scale(1.02);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
</style>
