<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\ProductResource;
use App\Models\{Category, Product};

class UpdateController extends Controller
{
    function __invoke(UpdateRequest $request, Category $category, Product $product) 
    {
        $data = $request->validated();
        $cats = $data['categories'];
        unset($data['categories']);
        $data['user_id'] = $request->user()->id;
        $product->update($data);
        $product->categories()->attach($cats);

        return response(new ProductResource($product));
    }
}
