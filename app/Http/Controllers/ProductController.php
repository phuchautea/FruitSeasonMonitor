<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\Product\IProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(IProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'origin' => 'required',
            'quality_grade' => 'required',
            'availability' => 'required',
            'price' => 'required',
        ]);

        $product = $this->productService->createProduct($data);

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'origin' => 'required',
            'quality_grade' => 'required',
            'availability' => 'required',
            'price' => 'required',
        ]);

        $product = $this->productService->updateProduct($id, $data);

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = $this->productService->deleteProduct($id);

        return response()->json($product, 204);
    }
}
