@extends('layouts.app')

@section('content')

<style>
html, body{
    height: 100%;
    overflow: hidden;
}

body{
    background: #141414 !important;
}

.navbar{
    background: #0b0b0b !important;
    border-bottom: 1px solid #222 !important;
    box-shadow: 0 3px 15px rgba(0,0,0,.6);
}

.navbar-brand{
    color: #E50914 !important;
    font-weight: 800;
    font-size: 1.8rem;
    letter-spacing: 1px;
}

.navbar .nav-link{
    color: #ffffff !important;
    transition: .3s;
}

.navbar .nav-link:hover{
    color: #E50914 !important;
}

body::before{
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.75);
    z-index: -1;
}

.login-card{
    background: rgba(20,20,20,.92);
    border-radius: 12px;
    backdrop-filter: blur(6px);
    box-shadow: 0 15px 40px rgba(0,0,0,.7);
}

.logo-seriesflix{
    color: #E50914;
    font-size: 2.2rem;
    font-weight: 800;
    letter-spacing: 1px;
}

.form-control{
    background: #333 !important;
    border: 1px solid #444;
    color: #fff !important;
    height: 44px;
}

.form-control:focus{
    background: #333 !important;
    color: #fff !important;
    border-color: #E50914 !important;
    box-shadow: 0 0 0 .2rem rgba(229,9,20,.25);
}

.form-control::placeholder{
    color: #bbb;
}

.btn-login{
    background: #E50914;
    border: none;
    height: 44px;
    font-weight: bold;
    transition: .3s;
}

.btn-login:hover{
    background: #c40812;
}

.text-light-gray{
    color: #b3b3b3;
}

.forgot-link{
    color: #b3b3b3;
    text-decoration: none;
}

.forgot-link:hover{
    color: #fff;
}

.form-check-label{
    color: #b3b3b3;
}

.invalid-feedback{
    color: #ff6b6b;
}
</style>

<div class="container-fluid vh-100 d-flex align-items-center justify-content-center overflow-hidden">
    <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">
        <div class="card login-card border-0">
            <div class="card-body p-4">

                <div class="text-center mb-3">
                    <h1 class="logo-seriesflix">SeriesFlix</h1>

                    <h3 class="text-white fw-bold mt-2">
                        Bem-vindo(a) de volta!
                    </h3>

                    <p class="text-light-gray mb-0">
                        Entre para acessar suas séries favoritas
                    </p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-2">
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Digite seu e-mail"
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

                    <div class="mb-2">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Digite sua senha"
                            required
                            autocomplete="current-password"
                        >

                        @error('password')
                            <span class="invalid-feedback d-block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
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
                        <button type="submit" class="btn btn-login text-white w-100">
                            Entrar
                        </button>
                    </div>

                    @if(Route::has('password.request'))
                        <div class="text-center mt-3">
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