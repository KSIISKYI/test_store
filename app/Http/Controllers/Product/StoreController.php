<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\{Category, Product};
use App\Http\Resources\ProductResource;

class StoreController extends Controller
{
    function __invoke(StoreRequest $request, Category $category) 
    {
        $data = $request->validated();
        $cats = $data['categories'];
        unset($data['categories']);
        $data['user_id'] = $request->user()->id;
        $product = Product::create($data);
        $product->categories()->attach($cats);

        return response(new ProductResource($product));
    }
}
