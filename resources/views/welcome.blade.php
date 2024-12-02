<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Don Bosco - Sistema de Control de Asistencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
        }
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.95) !important;
        }
        .btn-login {
            background-color: #0d6efd;
            color: white;
            padding: 0.5rem 2rem;
            border-radius: 2rem;
            transition: all 0.3s;
        }
        .btn-login:hover {
            background-color: #0b5ed7;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Don Bosco" height="40">
                Colegio Don Bosco
            </a>
            <div class="ms-auto">
                <a class="btn btn-login" href="{{ route('login') }}">Acceder al Sistema</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="inicio">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Sistema de Control de Asistencia</h1>
                    <p class="lead mb-4">Una solución moderna y eficiente para el control de asistencia de nuestros estudiantes.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Acceder al Sistema</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5" id="caracteristicas">
        <div class="container">
            <h2 class="text-center mb-5">Características del Sistema</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-user-check feature-icon"></i>
                        <h3>Control en Tiempo Real</h3>
                        <p>Registro y seguimiento instantáneo de la asistencia de los estudiantes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h3>Reportes Detallados</h3>
                        <p>Generación de informes y estadísticas para una mejor toma de decisiones.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-mobile-alt feature-icon"></i>
                        <h3>Acceso Multiplataforma</h3>
                        <p>Accede al sistema desde cualquier dispositivo y en cualquier momento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Colegio Don Bosco</h5>
                    <p>Sistema de Control de Asistencia</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; {{ date('Y') }} Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
