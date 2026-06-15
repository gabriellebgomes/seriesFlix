@extends('layouts.app')

@section('content')

<style>
    body {
    
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
    }
    .register-card {
        background: rgba(20, 20, 20, 0.92);
        border-radius: 15px;
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
        background: #333 !important;
        color: white !important;
        border-color: #E50914;
        box-shadow: 0 0 0 0.2rem rgba(229, 9, 20, .25);
    }

    .form-control::placeholder {
        color: #bbb;
    }

    .btn-register {
        background: #E50914;
        border: none;
        height: 50px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-register:hover {
        background: #c40812;
    }

    .text-light-gray {
        color: #b3b3b3;
    }

    .invalid-feedback {
        color: #ff6b6b;
        display: block;
    }
</style>

<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-4">

```
<div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">

    <div class="card register-card shadow-lg border-0">

        <div class="card-body p-5">

            <div class="text-center mb-4">
                <h1 class="logo-seriesflix">SeriesFlix</h1>

                <h3 class="text-white fw-bold mt-3">
                    Crie sua conta
                </h3>

                <p class="text-light-gray">
                    Cadastre-se para acessar suas séries favoritas
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input
                        id="name"
                        type="text"
                        placeholder="Nome completo"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                        autofocus
                    >

                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

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
                    >

                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input
                        id="password"
                        type="password"
                        placeholder="Crie uma senha"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required
                        autocomplete="new-password"
                    >

                    @error('password')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input
                        id="password-confirm"
                        type="password"
                        placeholder="Confirme sua senha"
                        class="form-control"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    >
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-register text-white">
                        Criar Conta
                    </button>
                </div>

                <div class="text-center mt-4">
                    <span class="text-light-gray">
                        Já possui uma conta?
                    </span>

                    <a href="{{ route('login') }}"
                       class="text-decoration-none text-danger fw-bold">
                        Entrar
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>
```

</div>

@endsection
