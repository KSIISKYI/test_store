<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\ProductResource;

class IndexController extends Controller
{
    function __invoke(Category $category) 
    {
        $products = $category->products;
        
        return response(ProductResource::collection($products), 200);
    }
}
