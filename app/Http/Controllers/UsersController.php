<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UsersController extends Controller {

    protected $jwt;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JWTAuth $jwt) {
        $this->jwt = $jwt;
    }
    
    /**
     * 
     * @param Request $request
     */
    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (! $token = $this->jwt->attempt($request->only('email', 'password'))) {
            return response()->json(['Usuário não encontrado'], 404);
        }
        return response()->json(compact('token'));
    }

    //
}
