<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name'=>['required','string'],
            'email'=>['required','string', 'unique:users'],
            'password'=>['required','min:8'],
        ]);
        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return response()->json([
            'user'=>true,
           'message'=>'User Created Successfully'
        ],200);

    }

    // public function login(Request $request){
    //     $data = $request->validate([
    //         'name'=> ['required', 'string'],
    //         'email'=>['required','email', 'exists:users'],
    //         'password'=>['required','min:8'],
    //     ]);
    //     $user = User::where('email', $data['email'])->first();
    //     if(!$user ||!$user->checkPassword($data['password'])){
    //         return response()->json([
    //            'message'=>'Invalid Credentials'
    //         ], 401);
    //     }
    //     $token = $user->createToken('auth_token')->plainTextToken;
    //     return response()->json([
    //         'user'=>$user,
    //         'token'=>$token
    //     ]);
    // }
}
