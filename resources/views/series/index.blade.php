@extends('adminlte::page')

@section('title', 'SeriesFlix')

@section('content_header')
    <h1>Séries Cadastradas</h1>
    
@stop
@section('adminlte_css')
    <link rel="icon" type="image/png" href="{{ asset('images/logo-seriesFlix.png') }}">
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('series.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Adicionar Série
    </a>
</div>
<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>    
                    <th>Capa</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Gênero</th>
                    <th>Classificação</th>
                    <th>Temporadas</th>
                    <th>Ano</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @forelse($series as $serie)
                    <tr>
                     

                        <td>
                            @if($serie->capa)
                                <img src="{{ asset('storage/' . $serie->capa) }}"
                                     width="80">
                            @else
                                Sem capa
                            @endif
                        </td>

                        <td>{{ $serie->titulo }}</td>

                        <td>{{ $serie->descricao }}</td>

                        <td>{{ $serie->genero }}</td>

                        <td>{{ $serie->classificacao_indicativa }}</td>

                        <td>{{ $serie->temporadas }}</td>

                        <td>{{ $serie->ano_lancamento }}</td>

                        <td>{{ $serie->status }}</td>
                    <td>
                    <a href="{{ route('series.edit', $serie->id) }}" 
                    class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('series.destroy', $serie->id) }}"
                    method="POST"
                    style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                    onclick="return confirm('Tem certeza que deseja excluir esta série?')">Excluir</button>
                </form>
                </td>
                    </tr>


                @empty
                    <tr>
                        <td colspan="9" class="text-center">
                            Nenhuma série cadastrada.
                        </td>
                    </tr>
                    <td>
   
                </td>
                @endforelse

            </tbody>
        </table>

    </div>
</div>

@stop