<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    function __invoke(RegisterRequest $request) 
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        
        return response(null, 204);
    }
}
