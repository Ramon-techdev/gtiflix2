<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Filmeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
        [
            
            

        ]
        );
         DB::table('filmes')->insert(
         [
             'nome'=>"Mad Max",
             'descricao' => "ultimo homem da areia",
             'capa' => "https://upload.wikimedia.org/wikipedia/pt/thumb/2/23/Max_Mad_Fury_Road_Newest_Poster.jpg/250px-Max_Mad_Fury_Road_Newest_Poster.jpg"
         ]);
         DB::table('filmes')->insert(
            [
                'nome'=>"O último samurai",
                'descricao' => "Ronnin",
                'capa' => "https://br.web.img2.acsta.net/medias/nmedia/18/91/70/70/20159112.jpg"
            ]);
            DB::table('filmes')->insert(
                [
                    'nome'=>"Spider-man",
                    'descricao' => "Salvar Mary Jane",
                    'capa' => "https://br.web.img3.acsta.net/pictures/bzp/01/29007.jpg"
                ]);
                DB::table('filmes')->insert(
                    [
                        'nome'=>"John Wick",
                        'descricao' => "De volta ao jogo",
                        'capa' => "https://br.web.img3.acsta.net/pictures/14/10/27/20/07/170589.jpg"
                    ]);
                    DB::table('filmes')->insert(
                        [
                            'nome'=>"O lobo de Wall Street",
                            'descricao' => "Investir",
                            'capa' => "https://upload.wikimedia.org/wikipedia/pt/thumb/8/8d/The_Wolf_of_Wall_Street.jpg/250px-The_Wolf_of_Wall_Street.jpg"
                        ]);
    }
}
