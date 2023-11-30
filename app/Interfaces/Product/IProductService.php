<?php

namespace App\Interfaces\Product;

interface IProductService
{
    public function getAllProducts();

    public function getProductById($id);

    public function createProduct($data);

    public function updateProduct($id, $data);

    public function deleteProduct($id);
}
