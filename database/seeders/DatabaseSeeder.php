<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                
        DB::table('users')->insert([
            [
                'id'       => 1,
                'name' => 'enric',
                'email'     => 'enric.guasch@estudiant.upc.edu',
                'password' => 1234,
                'role' => 'admin',

            ],
            [
                'id'    => 2,
                'name'  => 'pau',
                'email'  => 'pau.123@estudiant.upc.edu',
                'password' => 1234,
                'role' => 'admin',
            ],
            [
                'id'    => 3,
                'name'  => 'gerard',
                'email'  => 'gerard.456@estudiant.upc.edu',
                'password' => 1234,
                'role' => 'admin',
                ]
            ]);
    }
}
