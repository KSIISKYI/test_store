<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class IndexController extends Controller
{
    function __invoke(Request $request) 
    {
        return response(CategoryResource::collection(Category::all()));
    }
}
