<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

//JWT
use Tymon\JWTAuth\Facades\JWTAuth;






class DbController extends Controller
{
    
    public function index(){
    //dump($GameCreators);
    }

    public function login(Request $request){
     
        $credential = [
            "email" => $request->email,
            "password" => $request->password
        ];
        //dd($credential);

        if(Auth::login($credential)){
            // $user = Auth::user();

            // $token = JWTAuth::fromUser($user,"secretpassword");

            return response()->json([
                'status' => 'success',
                'token' => '123456'
            ]);

        } else {
            return response()->json([
                'status' => 'error',
            ]);
        };


    }

    public function RegisterUser(Request $request){
        dd($request);
        $request->validate([
            '_username' => ['required','string','max:50'],
            '_email' => ['required','string','max:50'],
            '_password' => ['required','email','max:120']
        ]);
        
        $user = new User();

        $user->name = $request->_username;
        $user->email = $request->_email;
        $user->password = Hash::make($request->_password);
        $user->role = 'user';

        $user->save();

        //Auth::login($user);

        return response()->json([
            'status'=>'success'
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome')->withSuccess('Logged out');
    }


    public function EditUser($user){
        $user = User::findOrFail($user);
        return view('EditUser', compact('user'));

    }

    public function update(Request $request,$user){
        $user = User::findOrFail($user);
        $user->update($request->all());
        $user->save();


        return redirect()->route('welcome');

    }

    public function Delete($id){
        $ranking = Partida::findOrFail($id);
        $ranking->delete();

        return response()->json(['delete' =>'delete user']);

    }


}
