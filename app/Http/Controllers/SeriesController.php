<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;


class SeriesController extends Controller

{
    public function index()
{
    $series = Series::all();
    return view('series.index', compact('series'));
}
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
    return redirect()->route('series.index')
        ->with('success', 'Série cadastrada com sucesso!');
}
public function edit($id) {
    $serie = Series::findOrfail($id);

    return view('series.edit', compact('serie'));
}

public function update(Request $request, $id)
{
    $serie = Series::findOrFail($id);

    $serie->titulo = $request->titulo;
    $serie->descricao = $request->descricao;
    $serie->genero = $request->genero;
    $serie->classificacao_indicativa = $request->classificacao_indicativa;
    $serie->temporadas = $request->temporadas;
    $serie->ano_lancamento = $request->ano_lancamento;
    $serie->status = $request->status;

    if ($request->hasFile('capa')) {

        $capa = $request->file('capa')
                        ->store('capas', 'public');

        $serie->capa = $capa;
    }

    $serie->save();

    return redirect()
        ->route('series.index')
        ->with('success', 'Série atualizada com sucesso!');
}
public function destroy($id)
{
    $serie = Series::findOrFail($id);

    if ($serie->capa) {
        \Storage::disk('public')->delete($serie->capa);
    }

    $serie->delete();

    return redirect()->route('series.index')
        ->with('success', 'Série excluída com sucesso!');
}
}