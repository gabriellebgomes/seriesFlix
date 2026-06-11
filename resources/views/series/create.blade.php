@extends('adminlte::page')

@section('title', 'Cadastrar Série')

@section('content_header')
    <h1>Cadastrar Série</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('series.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-group mb-3">
                <label>Título</label>
                <input type="text"
                       name="titulo"
                       class="form-control"
                       required>
            </div>

            <div class="form-group mb-3">
                <label>Descrição</label>
                <textarea name="descricao"
                          class="form-control"
                          rows="4"
                          required></textarea>
            </div>

            <div class="form-group mb-3">
                <label>Gênero</label>
                <input type="text"
                       name="genero"
                       class="form-control"
                       required>
            </div>

            <div class="form-group mb-3">
                <label>Classificação Indicativa</label>
                <input type="text"
                       name="classificacao_indicativa"
                       class="form-control"
                       required>
            </div>

            <div class="form-group mb-3">
                <label>Temporadas</label>
                <input type="number"
                       name="temporadas"
                       class="form-control"
                       required>
            </div>

            <div class="form-group mb-3">
                <label>Ano de Lançamento</label>
                <input type="number"
                       name="ano_lancamento"
                       class="form-control"
                       required>
            </div>

            <div class="form-group mb-3">
                <label>Status</label>

                <select name="status" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Em andamento">
                        Em andamento
                    </option>
                    <option value="Finalizada">
                        Finalizada
                    </option>
                </select>
            </div>

            <div class="form-group mb-4">
                <label>Capa</label>
                <input type="file"
                       name="capa"
                       class="form-control">
            </div>

            <button type="submit"
                    class="btn btn-primary">
                Salvar Série
            </button>

        </form>

    </div>
</div>

@stop