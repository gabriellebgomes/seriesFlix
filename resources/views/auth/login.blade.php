@extends('layouts.app')

@section('content')
<style>
    body {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
    }
    .login-card {
        background: rgba(20, 20, 20, 0.92);
        border-radius: 10px;
        backdrop-filter: blur(5px);
    }
    .logo-seriesflix {
        color: #E50914;
        font-size: 2.8rem;
        font-weight: 800;
        letter-spacing: 1px;
    }
    .form-control {
        background: #333 !important;
        border: 1px solid #444;
        color: white !important;
        height: 50px;
    }
    .form-control:focus {
        background: #333;
        color: white;
        border-color: #E50914;
        box-shadow: 0 0 0 0.2rem rgba(229, 9, 20, .25);
    }
    .form-control::placeholder {
        color: #bbb;
    }
    .btn-login {
        background: #E50914;
        border: none;
        height: 50px;
        font-weight: bold;
        transition: 0.3s;
    }
    .btn-login:hover {
        background: #c40812;
    }
    .text-light-gray {
        color: #b3b3b3;
    }

    .forgot-link:hover {
        color: white;
    }
    .form-check-label {
        color: #b3b3b3;
    }
    .invalid-feedback {
        color: #ff6b6b;
    }
</style>

<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center">
    <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">
        <div class="card login-card shadow-lg border-0">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <h1 class="logo-seriesflix">SeriesFlix</h1>

                    <h3 class="text-white fw-bold mt-3">
                        Bem-vindo(a) de volta!
                    </h3>

                    <p class="text-light-gray">
                        Entre para acessar suas séries favoritas
                    </p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input
                            id="email"
                            type="email"
                            placeholder="Digite seu e-mail"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                        >
                        @error('email')
                            <span class="invalid-feedback d-block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input
                            id="password"
                            type="password"
                            placeholder="Digite sua senha"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="current-password"
                        >
                        @error('password')
                            <span class="invalid-feedback d-block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-check mb-4">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="remember">
                            Lembrar de mim
                        </label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-login text-white">
                            Entrar
                        </button>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="text-center mt-4">
                            <a class="forgot-link" href="{{ route('password.request') }}">
                                Esqueceu sua senha?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection