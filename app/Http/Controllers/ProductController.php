<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Repositories\Repository;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Repository::forProduct()->all();
        return ProductResource::collection($products);
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->validated();
        $product = Repository::forProduct()->create($data);
        return new ProductResource($product);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product = Repository::forProduct()->update($product, $data);
        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        Repository::forProduct()->delete($product);
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
