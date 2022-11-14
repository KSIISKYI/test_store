<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;


class StoreController extends Controller
{
    function __invoke(Request $request) 
    {
        $data = $request->validate(['name' => 'required']);
        $data['user_id'] = $request->user()->id;
        $category = Category::create($data);

        return response(new CategoryResource($category), 201);
    }
}
