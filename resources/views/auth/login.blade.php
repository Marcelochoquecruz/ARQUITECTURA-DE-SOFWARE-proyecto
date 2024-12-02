@extends('layouts.auth')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    body {
        background: linear-gradient(135deg, #1a1c4b 0%, #2d3250 100%);
        font-family: 'Poppins', sans-serif;
    }

    .login-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        padding: 2rem;
        max-width: 520px;
        width: 95%;
        margin: 1rem auto;
    }

    .login-header {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .login-header h1 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #1a1c4b;
        margin-bottom: 0.25rem;
        letter-spacing: -0.5px;
    }

    .login-header p {
        color: #6b7280;
        font-size: 0.95rem;
        font-weight: 400;
    }

    .form-control {
        background: #f3f4f6;
        border: 2px solid transparent;
        border-radius: 12px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        font-weight: 500;
        color: #1f2937;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: #fff;
        border-color: #4f46e5;
        box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
    }

    .form-control::placeholder {
        color: #9ca3af;
        font-weight: 400;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 1rem 0;
    }

    .remember-me input[type="checkbox"] {
        width: 1.2rem;
        height: 1.2rem;
        border-radius: 6px;
        border: 2px solid #4f46e5;
        cursor: pointer;
    }

    .remember-me label {
        color: #4b5563;
        font-size: 0.95rem;
        font-weight: 500;
        cursor: pointer;
    }

    .btn-group {
        display: flex;
        gap: 1rem;
        margin-top: 1.25rem;
    }

    .btn {
        flex: 1;
        padding: 0.75rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 12px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .btn i {
        font-size: 1.1rem;
    }

    .btn-login {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        color: white;
        border: none;
    }

    .btn-login:hover {
        background: linear-gradient(135deg, #4338ca 0%, #6d28d9 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
    }

    .btn-cancel {
        background: #fee2e2;
        color: #ef4444;
        border: none;
    }

    .btn-cancel:hover {
        background: #fecaca;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(239, 68, 68, 0.15);
    }

    .forgot-password {
        color: #4f46e5;
        text-decoration: none;
        font-size: 0.95rem;
        font-weight: 500;
        display: block;
        text-align: center;
        margin-top: 1rem;
        transition: color 0.3s ease;
    }

    .forgot-password:hover {
        color: #4338ca;
        text-decoration: none;
    }

    .invalid-feedback {
        color: #ef4444;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        font-weight: 500;
    }

    @media (max-width: 640px) {
        .login-container {
            padding: 1.5rem;
            margin: 0.5rem auto;
            width: 98%;
        }

        .login-header h1 {
            font-size: 1.5rem;
        }

        .btn-group {
            flex-direction: column;
        }
    }
</style>

<div class="login-container">
    <div class="login-header">
        <h1>Bienvenido</h1>
        <p>Ingrese sus credenciales para continuar</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <input type="email" 
                   class="form-control @error('email') is-invalid @enderror" 
                   name="email" 
                   placeholder="Correo Electrónico" 
                   value="{{ old('email') }}" 
                   required 
                   autofocus>
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <input type="password" 
                   class="form-control @error('password') is-invalid @enderror" 
                   name="password" 
                   placeholder="Contraseña" 
                   required>
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="remember-me">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Recordar sesión</label>
        </div>

        <div class="btn-group">
            <button type="submit" class="btn btn-login">
                <i class="fas fa-sign-in-alt"></i>
                Iniciar Sesión
            </button>
            <a href="{{ url('/') }}" class="btn btn-cancel">
                <i class="fas fa-times"></i>
                Cancelar
            </a>
        </div>

        @if (Route::has('password.request'))
            <a class="forgot-password" href="{{ route('password.request') }}">
                ¿Olvidó su contraseña?
            </a>
        @endif
    </form>
</div>
@endsection
