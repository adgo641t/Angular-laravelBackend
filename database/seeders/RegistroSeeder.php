<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registro')->truncate();

        DB::table('registro')->insert([
            [
                'id_j' => 1,
                'id_p' => 1,
            ],
            [
                'id_j' => 2,
                'id_p' => 1,
            ],
            [
                'id_j' => 1,
                'id_p' => 4,
            ],
            [
                'id_j' => 1,
                'id_p' => 2,
            ],
            [
                'id_j' => 2,
                'id_p' => 2,
            ],
            [
                'id_j' => 5,
                'id_p' => 2,
            ],
            [
                'id_j' => 6,
                'id_p' => 2,
            ],
            [
                'id_j' => 2,
                'id_p' => 3,
            ],
            [
                'id_j' => 3,
                'id_p' => 3,
            ],
            [
                'id_j' => 4,
                'id_p' => 3,
            ],
            [
                'id_j' => 1,
                'id_p' => 4,
            ],
            [
                'id_j' => 4,
                'id_p' => 4,
            ],
            [
                'id_j' => 6,
                'id_p' => 4,
            ],
            [
                'id_j' => 2,
                'id_p' => 5,
            ],
            [
                'id_j' => 3,
                'id_p' => 5,
            ],

        ]);
    }
}
