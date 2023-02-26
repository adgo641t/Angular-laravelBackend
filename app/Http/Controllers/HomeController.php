<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowGame;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $GameCreators = [
            [
                "Name" => 'Gerard',
                "Description" => 'Game developer'
            ]
        ];
    
         $WebDevelopers = [
            [
            'Name'=>'Adrian Gomez',
            'Description' => 'Web developer',
            ],
            [
                'Name'=>'Pau Saigner',
                'Description' => 'Web developer',
            ],
        ];

        return  view('welcome', compact('GameCreators', 'WebDevelopers'));
        ;
    }

    /**
     * Show the registration form.

    */
    public function register()
    {
        return  view('register');
    }

    /**
     * Show the login form
     */

    public function login()
    {
        return  view('login');
    }

    public function ShowTable(){
        $dataTable = ShowGame::all();
        return view('ShowGame', compact('dataTable'));
    }


    public function ShowUsers(){
        $users = User::all();
        return view('UserTable', compact('users'));
    }
    
}
