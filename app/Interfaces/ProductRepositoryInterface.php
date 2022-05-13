<?php
namespace App\Interfaces;
interface ProductRepositoryInterface{
    public function GetAllProducts();
    public function AddProduct($request);
    public function UpdateProductById($product,$request);
    public function DestroyProductById($product);


}
