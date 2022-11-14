<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    function __invoke(LoginRequest $request)
    {
        $data = $request->validated();
    
        if (!Auth::attempt($data)) {
            return response(['error' => 'Invalid data']);
        }

        $user = User::where('email', $data['email'])->get()[0];
        $access_token = $user->createToken('access_token')->plainTextToken;

        return response(['Access token' => $access_token], 200);


    }
}
