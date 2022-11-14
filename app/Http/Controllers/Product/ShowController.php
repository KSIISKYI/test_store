<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\{Category, Product};

class ShowController extends Controller
{
    function __invoke(Request $request, Category $category, Product $product) 
    {
        if ($category->products->contains($product)) 
        {
            return response(new ProductResource($product));
        }

        return response(['error' => 'Page not found'], 404);
        
    }
}
