@extends('adminlte::page')

@section('title', 'SeriesFlix')

@section('css')
<style>
    body {
       background-image: url("/images/back-fundo.jpg") !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-attachment: fixed !important;
    }
    .wrapper {
        background: transparent !important;
    }
    .content-wrapper {
        background: transparent !important;
    }
    .content-header h1 {
        color: white !important;
    }
    .card {
        background: rgba(0, 0, 0, 0.75) !important;
        color: white !important;
        border-radius: 15px !important;
    }
</style>
@stop

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 70vh;">

    <div class="card text-center p-4" style="max-width: 500px; width: 100%;">
        <div class="card-body">

            <h2 class="mb-4">Bem-vindo ao SeriesFlix</h2>

            <p class="mb-4">
                Gerencie suas séries favoritas no estilo streaming!
            </p>

            <a href="{{ route('login') }}" class="btn btn-danger me-2">
                Login
            </a>

            <a href="{{ route('register') }}" class="btn btn-success">
                Cadastro
            </a>

        </div>
    </div>

</div>
@stop
