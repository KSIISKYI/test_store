<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function __invoke(Request $request)
    {
        $request->user()->tokens()->delete();

        return response(null, 204);
    }
}
