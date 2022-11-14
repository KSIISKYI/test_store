<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class DestroyController extends Controller
{
    function __invoke(Request $request, Category $category) 
    {
        foreach($category->products as $product) 
        {
            $product->delete();
        }
        $category->delete();

        return response(null, 204);
    }
}
