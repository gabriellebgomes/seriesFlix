@extends('adminlte::page')

@section('title', 'SeriesFlix')

@section('adminlte_css')

<link rel="icon" type="image/png" href="{{ asset('images/logo-seriesFlix.png') }}">

<style>
.content-wrapper{
    background: #141414 !important;
}
.content-header h1{
    color: #ffffff;
    font-weight: 700;
    letter-spacing: 1px;
}
.main-header{
    background: #0b0b0b !important;
    border-bottom: 1px solid #222 !important;
}

.main-header .nav-link{
    color: #fff !important;
}

.main-sidebar{
    background: #0b0b0b !important;
}

.brand-link{
    background: #0b0b0b !important;
    border-bottom: 1px solid #222 !important;
}
.alert-success{
    background: #198754;
    color: white;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,.3);
}

.btn-success{
    background: #E50914 !important;
    border-color: #E50914 !important;
    border-radius: 8px;
    font-weight: 600;
    box-shadow: 0 4px 12px rgba(229,9,20,.3);
}

.btn-success:hover{
    background: #b20710 !important;
    border-color: #b20710 !important;
}

.card{
    background: #1c1c1c;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,.5);
}

.card-body{
    padding: 0;
}
.table{
    margin-bottom: 0;
    color: #fff;
}

.table th{
    background: #E50914;
    color: white;
    text-align: center;
    vertical-align: middle;
    border: none;
    font-size: 13px;
    letter-spacing: .5px;
    padding: 15px;
}

.table td{
    vertical-align: middle;
    border-color: #333;
    background: #1c1c1c;
    padding: 15px;
}

.table-striped tbody tr:nth-of-type(odd){
    background: #202020;
}

.table tbody tr:hover{
    background: #2a2a2a !important;
    transition: .2s;
}
.table img{
    width: 60px;
    height: 90px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,.6);
}
.table strong{
    color: #fff;
    font-size: 15px;
}
.descricao{
    min-width: 300px;
    max-width: 450px;
    white-space: normal !important;
    word-break: break-word;
    color: #d1d1d1;
    line-height: 1.5;
}
.badge-finalizada{
    background: #198754;
    color: white;
    padding: 8px 12px;
    border-radius: 20px;
    font-size: 12px;
}

.badge-andamento{
    background: #ffc107;
    color: #000;
    padding: 8px 12px;
    border-radius: 20px;
    font-size: 12px;
}

.btn-warning{
    border-radius: 8px;
    font-weight: 600;
}

.btn-danger{
    border-radius: 8px;
    font-weight: 600;
}

.pagination{
    justify-content: center;
    margin: 25px 0;
}

.pagination .page-link{
    background: #1c1c1c;
    border-color: #333;
    color: #E50914;
}
.pagination .page-link:hover{
    background: #2a2a2a;
    color: white;
}
.pagination .page-item.active .page-link{
    background: #E50914;
    border-color: #E50914;
    color: white;
}
</style>

@stop

@section('content_header')
    <h1>🎬 Séries Cadastradas</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('series.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i>
        Adicionar Série
    </a>
</div>
<div class="card">

    <div class="card-body">

        <div class="table-responsive">

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
                                     alt="{{ $serie->titulo }}">
                            @else
                                Sem capa
                            @endif
                        </td>
                        <td>
                            <strong>{{ $serie->titulo }}</strong>
                        </td>
                        <td class="descricao">
                            {{ $serie->descricao }}
                        </td>
                        <td>{{ $serie->genero }}</td>
                        <td>{{ $serie->classificacao_indicativa }}</td>
                        <td>{{ $serie->temporadas }}</td>
                        <td>{{ $serie->ano_lancamento }}</td>
                        <td>
                            @if($serie->status == 'Finalizada')
                                <span class="badge-finalizada">
                                    Finalizada
                                </span>
                            @else
                                <span class="badge-andamento">
                                    Em andamento
                                </span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('series.edit', $serie->id) }}"
                               class="btn btn-warning btn-sm mb-1">
                                <i class="fas fa-edit"></i>
                                Editar
                            </a>
                            <form action="{{ route('series.destroy', $serie->id) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir esta série?')">
                                    <i class="fas fa-trash"></i>
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-white py-4">
                            Nenhuma série cadastrada.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $series->links() }}
        </div>
    </div>
</div>
@stop