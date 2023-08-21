<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            $user = Auth::user();
            $token = $user->createToken('myapi')->accessToken;

            return response()->json(['access_token' => $token,'user'=>$user], 200);
        } else {
            return response()->json(['error' => 'Unauthorized',404]);
        }
    }


    
}
