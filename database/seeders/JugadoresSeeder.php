<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::table('jugadores')->truncate();
        
        DB::table('jugadores')->insert([
            [
                'id'       => 1,
                'username' => 'enric',
                'pword'    => 1234,
                'mail'     => 'enric.guasch@estudiant.upc.edu',
            ],
            [
                'id'    => 2,
                'name'  => 'pau',
                'pword' => 1234,
                'mail'  => 'enric.guasch@estudiant.upc.edu',
            ],
            [
                'id'    => 3,
                'name'  => 'gerard',
                'pword' => 1234,
                'mail'  => 'enric.guasch@estudiant.upc.edu',
            ],
            [
                'id'    => 4,
                'name'  => 'oussama',
                'pword' => 1234,
                'mail'  => 'oussama.ayat@estudiant.upc.edu',
            ], [
                'id'    => 5,
                'name'  => 'alex',
                'pword' => 1234,
                'mail'  => 'alex.berrocal@estudiant.upc.edu',
            ], [
                'id'    => 6,
                'name'  => 'ingrid',
                'pword' => 1234,
                'mail'  => 'ingrid.hinno@estudiant.upc.edu',
            ]
            
        ]);   
    }
}
