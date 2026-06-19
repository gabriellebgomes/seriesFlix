<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Series;

class SeriesSeeder extends Seeder
{
    public function run(): void
    {
        Series::create([
            'titulo' => 'Breaking Bad',
            'descricao' => 'Professor de química vira fabricante de drogas.',
            'genero' => 'Drama',
            'classificacao_indicativa' => '18',
            'temporadas' => 5,
            'ano_lancamento' => 2008,
            'status' => 'Finalizada',
            'capa' => 'capas/breakingbad.jpg',
        ]);

        Series::create([
            'titulo' => 'Stranger Things',
            'descricao' => 'Mistérios sobrenaturais em Hawkins.',
            'genero' => 'Ficção Científica',
            'classificacao_indicativa' => '14',
            'temporadas' => 4,
            'ano_lancamento' => 2016,
            'status' => 'Em andamento',
            'capa' => 'capas/strangerthings.jpg',
        ]);
         Series::create([
            'titulo' => 'The vampire Diares',
            'descricao' => 'Série sobrenatural sobre vampiros em Mistic Falls.',
            'genero' => 'Romance',
            'classificacao_indicativa' => '16',
            'temporadas' => 8,
            'ano_lancamento' => 2009,
            'status' => 'Finalizada',
            'capa' => 'capas/thevampirediare.jpg',
        ]);

    }
}