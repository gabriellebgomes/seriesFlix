@extends('adminlte::page')

@section('title', 'Cadastrar Série')

@section('adminlte_css')

<link rel="icon" type="image/png" href="{{ asset('images/logo-seriesFlix.png') }}">

<style>

    .card{
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,.1);
        border: none;
    }

    .card-header-custom{
        background: #E50914;
        color: white;
        padding: 15px 20px;
        font-size: 20px;
        font-weight: 600;
        border-radius: 12px 12px 0 0;
    }

    label{
        font-weight: 600;
        color: #495057;
    }

    .form-control{
        border-radius: 8px;
    }

    .form-control:focus{
        border-color: #E50914;
        box-shadow: 0 0 0 .2rem rgba(229,9,20,.15);
    }

    .btn-salvar{
        background: #E50914;
        border: none;
        color: white;
        font-weight: 600;
        padding: 10px 25px;
        border-radius: 8px;
    }

    .btn-salvar:hover{
        background: #b20710;
        color: white;
    }

    .preview-container{
        margin-top: 15px;
        display: none;
    }

    .preview-container img{
        width: 150px;
        height: 220px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #ddd;
    }

</style>

@stop

@section('content_header')
    <h1>Cadastrar Série</h1>
@stop

@section('content')

<div class="card">

    <div class="card-header-custom">
        🎬 Nova Série
    </div>

    <div class="card-body">

        <form action="{{ route('series.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group mb-3">
                        <label>Título</label>
                        <input type="text"
                               name="titulo"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="form-group mb-3">
                        <label>Ano de Lançamento</label>
                        <input type="number"
                               name="ano_lancamento"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="form-group mb-3">
                        <label>Temporadas</label>
                        <input type="number"
                               name="temporadas"
                               class="form-control"
                               required>
                    </div>

                </div>

            </div>

            <div class="form-group mb-3">
                <label>Descrição</label>

                <textarea name="descricao"
                          class="form-control"
                          rows="4"
                          required></textarea>
            </div>

            <div class="row">

                <div class="col-md-4">

                    <div class="form-group mb-3">
                        <label>Gênero</label>

                        <input type="text"
                               name="genero"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group mb-3">
                        <label>Classificação Indicativa</label>

                        <input type="text"
                               name="classificacao_indicativa"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="form-group mb-3">
                        <label>Status</label>

                        <select name="status" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="Em andamento">
                                Em andamento
                            </option>
                            <option value="Finalizada">
                                Finalizada
                            </option>
                        </select>

                    </div>

                </div>

            </div>

            <div class="form-group mb-4">

                <label>Capa da Série</label>

                <input type="file"
                       name="capa"
                       class="form-control"
                       id="capaInput"
                       accept="image/*">

                <div class="preview-container" id="previewContainer">
                    <img id="previewImage">
                </div>

            </div>

            <button type="submit"
                    class="btn btn-salvar">
                <i class="fas fa-save"></i>
                Salvar Série
            </button>

            <a href="{{ route('series.index') }}"
               class="btn btn-secondary ml-2">
                Cancelar
            </a>

        </form>

    </div>

</div>

<script>

document.getElementById('capaInput').addEventListener('change', function(e){

    const file = e.target.files[0];

    if(file){

        const reader = new FileReader();

        reader.onload = function(event){

            document.getElementById('previewImage').src = event.target.result;
            document.getElementById('previewContainer').style.display = 'block';

        }

        reader.readAsDataURL(file);

    }

});

</script>

@stop