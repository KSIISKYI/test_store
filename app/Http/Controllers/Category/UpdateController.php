<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class UpdateController extends Controller
{
    function __invoke(Request $request, Category $category) 
    {
        $data = $request->validate(['name' => 'required']);
        $category->update($data);
        
        return response(new CategoryResource($category), 201);
    }
}
