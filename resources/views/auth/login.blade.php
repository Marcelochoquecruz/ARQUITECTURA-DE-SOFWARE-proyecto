@extends('layouts.app')

@section('styles')
<style>
    body {
        background: linear-gradient(135deg, #0061f2 0%, #00ba88 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }
    .login-container {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 100%;
        max-width: 400px;
        padding: 2.5rem;
        backdrop-filter: blur(10px);
        transform: translateY(0);
        transition: all 0.3s ease;
        margin: 2rem;
    }
    .login-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    .login-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .login-header img {
        width: 100px;
        height: auto;
        margin-bottom: 1.5rem;
    }
    .login-header h1 {
        color: #2d3748;
        font-size: 1.75rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .login-header p {
        color: #718096;
        font-size: 0.95rem;
    }
    .form-control {
        background: rgba(255, 255, 255, 0.9);
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        height: auto;
    }
    .form-control:focus {
        border-color: #0061f2;
        box-shadow: 0 0 0 0.2rem rgba(0, 97, 242, 0.25);
    }
    .form-floating > label {
        padding: 0.75rem 1rem;
    }
    .form-floating > .form-control {
        padding: 1rem;
        height: calc(3.5rem + 2px);
    }
    .btn-login {
        background: linear-gradient(135deg, #0061f2 0%, #00ba88 100%);
        border: none;
        border-radius: 12px;
        color: white;
        font-weight: 600;
        padding: 0.875rem;
        width: 100%;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    .btn-login:hover {
        background: linear-gradient(135deg, #0052cc 0%, #009e74 100%);
        transform: translateY(-2px);
    }
    .forgot-password {
        color: #0061f2;
        text-decoration: none;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    .forgot-password:hover {
        color: #0052cc;
        text-decoration: underline;
    }
    .remember-me {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin: 1rem 0;
    }
    .remember-me input[type="checkbox"] {
        width: 1.125rem;
        height: 1.125rem;
        border-radius: 4px;
        border: 2px solid #e2e8f0;
    }
    .remember-me label {
        color: #4a5568;
        font-size: 0.875rem;
    }
    .invalid-feedback {
        font-size: 0.875rem;
        color: #e53e3e;
        margin-top: 0.25rem;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="login-container animated">
                <div class="login-header">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Don Bosco" class="mb-4">
                    <h1>Bienvenido</h1>
                    <p>Ingrese sus credenciales para continuar</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" placeholder="nombre@ejemplo.com" 
                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">Correo Electrónico</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               id="password" name="password" placeholder="Contraseña" 
                               required autocomplete="current-password">
                        <label for="password">Contraseña</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="remember-me">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Recordar sesión</label>
                    </div>

                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                    </button>

                    @if (Route::has('password.request'))
                        <div class="text-center mt-3">
                            <a class="forgot-password" href="{{ route('password.request') }}">
                                ¿Olvidó su contraseña?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
