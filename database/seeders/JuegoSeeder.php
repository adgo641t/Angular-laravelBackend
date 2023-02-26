<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juegos')->truncate();
        DB::table('juegos')->insert([
            [
                'id'       => 1,
                'Juego' => 'Oca',
            ],
            [
                'id'       => 2,
                'Juego' => 'Pitcionary',
            ],
            [
                'id'       => 3,
                'Juego' => 'Tic Tac Toe',
                ]
            ]);
    }
}
