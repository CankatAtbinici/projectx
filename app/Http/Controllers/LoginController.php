<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function isLogin(Request $request) {
        $credentials = $request->only(['email', 'password']);
        $token = JWTAuth::attempt($credentials);
    
        if ($token) {
            return response()->json(compact('token'));
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
