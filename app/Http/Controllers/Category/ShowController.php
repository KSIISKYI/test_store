<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class ShowController extends Controller
{
    function __invoke(Category $category)
    {
        return response(new CategoryResource($category), 201);
    }
}
