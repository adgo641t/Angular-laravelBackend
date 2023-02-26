<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('partidas')->truncate();
        DB::table('partidas')->insert([
            [
                'id' => 1,
                'juego' => 2,
                'jugadores' => 2,
                'fecha' => '2022-09-26',
                'hora' => '18:32',
                'ganador' => 'pau',
            ],
            [
                'id' => 2,
                'juego' => 1,
                'jugadores' => 1,
                'fecha' => '2022-09-26',
                'hora' => '18:42',
                'ganador' => 'pau',
            ],
            [
                'id' => 3,
                'juego' => 2,
                'jugadores' => 3,
                'fecha' => '2022-09-27',
                'hora' => '11:13',
                'ganador' => 'gerard',
            ],
            [
                'id' => 4,
                'juego' => 2,
                'jugadores' => 2,
                'fecha' => '2022-09-28',
                'hora' => '09:03',
                'ganador' => 'pau',
            ],
            [
                'id' => 5,
                'juego' => 1,
                'jugadores' => 2,
                'fecha' => '2022-09-29',
                'hora' => '22:45',
                'ganador' => 'pau',
            ],
        ]);
    }
}
