@extends('adminlte::page')

@section('title', 'SeriesFlix')

@section('content_header')
    <h1>Bem-vindo ao SeriesFlix</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p>Gerencie suas séries favoritas no estilo streaming!</p>

            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success">Cadastro</a>
        </div>
    </div>
@stop