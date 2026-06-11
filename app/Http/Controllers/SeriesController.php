<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class SeriesController extends Controller
{
    public function create()
    {
        return view('series.create');
    }

public function store(Request $request)
{
    $capa = null;

    if ($request->hasFile('capa')) {
        $capa = $request->file('capa')->store('capas', 'public');
    }

    $serie = new Series();

    $serie->titulo = $request->titulo;
    $serie->descricao = $request->descricao;
    $serie->genero = $request->genero;
    $serie->classificacao_indicativa = $request->classificacao_indicativa;
    $serie->temporadas = $request->temporadas;
    $serie->ano_lancamento = $request->ano_lancamento;
    $serie->status = $request->status;
    $serie->capa = $capa;

    $serie->save();

    return redirect()
        ->route('series.create')
        ->with('success', 'Série cadastrada com sucesso!');
}
}