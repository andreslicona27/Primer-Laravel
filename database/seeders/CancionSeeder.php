<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cancions")->insert([
            'nombre'=>'OK',
            'artista'=>'Rammstein',
            'album'=>'Zeit',
            'anio'=>'2020'
        ]);

        DB::table("cancions")->insert([
            'nombre'=>'flammifer',
            'artista'=>'Summoning',
            'album'=>'Summoning',
            'anio'=>'1998'
        ]);

        DB::table("cancions")->insert([
            'nombre'=>'Taures',
            'artista'=>'Mike Olfield',
            'album'=>'Crisis',
            'anio'=>'1992'
        ]);
    }
}
