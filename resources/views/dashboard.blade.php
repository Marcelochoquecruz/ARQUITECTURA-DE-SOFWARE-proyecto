@extends('layouts.admin')

@section('title', 'Dashboard - Colegio Don Bosco')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Estudiantes</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ App\Models\Mienbro::count() }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Grados</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ App\Models\Grado::count() }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                <i class="fas fa-graduation-cap text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuarios</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ App\Models\User::count() }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                <i class="fas fa-user-shield text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Asistencias Hoy</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ App\Models\Asistencia::whereDate('fecha', today())->count() }}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                <i class="fas fa-calendar-check text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h6>Últimas Asistencias Registradas</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estudiante</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Grado</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\Asistencia::with(['mienbro', 'mienbro.grado'])->latest()->take(5)->get() as $asistencia)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            @if($asistencia->mienbro->fotografia)
                                                <div class="avatar avatar-sm me-3">
                                                    <img src="{{ asset('storage/' . $asistencia->mienbro->fotografia) }}" class="avatar rounded-circle">
                                                </div>
                                            @endif
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $asistencia->mienbro->nombre }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $asistencia->mienbro->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $asistencia->mienbro->grado->nombre }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-{{ $asistencia->asistio ? 'success' : 'danger' }}">
                                            {{ $asistencia->asistio ? 'Presente' : 'Ausente' }}
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $asistencia->fecha->format('d/m/Y') }}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
