<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PalabraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('palabras')->truncate();
        
        DB::table('palabras')->insert([
            [
                'palabra' => 'patata',
            ],
            [
                'palabra' => 'moneda',
            ],
            [
                'palabra' => 'pato',
            ],
            [
                'palabra' => 'sonrisa',
            ],
            [
                'palabra' => 'navidad',
            ],
            [
                'palabra' => 'coche',
            ],
            [
                'palabra' => 'ordenador',
            ],
            [
                'palabra' => 'vaca',
            ],
            [
                'palabra' => 'zebra',
            ],
            [
                'palabra' => 'iphone',
            ],
            [
                'palabra' => 'calculadora',
            ],
            [
                'palabra' => 'examen',
            ],
            [
                'palabra' => 'gafas',
            ],
            [
                'palabra' => 'perro',
            ],
            [
                'palabra' => 'casa',
            ],
            [
                'palabra' => 'libro',
            ],
            [
                'palabra' => 'flor',
            ],
            [
                'palabra' => 'mesa',
            ],
            [
                'palabra' => 'silla',
            ],
            [
                'palabra' => 'auriculares',
            ],
            [
                'palabra' => 'barco',
            ],
            [
                'palabra' => 'avion',
            ],
            [
                'palabra' => 'luna',
            ]
        ]);
    }
}
