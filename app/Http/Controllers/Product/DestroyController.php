<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category, Product};

class DestroyController extends Controller
{
    function __invoke(Category $category, Product $product) 
    {
        if ($category->products->contains($product)) 
        {
            $product->categories()->detach();
            $product->delete();
            
            return response(null, 204);
        }
        return response(['error' => 'Page not found'], 404);
    }
}
