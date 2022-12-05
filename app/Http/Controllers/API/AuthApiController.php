<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;


class AuthApiController extends Controller
{
    public function register(Request $request){
        $user = User::where('email',$request->email)->first();

        if($user){
            return response()->json([
                'success'=>false,
                'message'=>'Email already exists'
            ]);
        }
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return response()->json([
            'success'=>true,
            'message'=>'Created'
        ]);
    }

    public function login(Request $request) {
        $credentials = $request->only('email','password');

        $user=User::where('email', $credentials['email'])->first();

        if(!$user){
            return response()->json([
                'success'=>true,
                'message'=> 'This email is not registered!'
            ]);
        }


        if (Auth::attempt($credentials)){
            return response()->json([
                'success'=>true,
                'token'=>$user->createToken($user->email)->accessToken
            ]);
        }


        return response()->json([
            'success'=>false,
            'message'=>'Email password invalid!'
        ]);
    }
}
