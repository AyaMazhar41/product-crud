<?php
namespace App\Repositories;
 use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface{

    public function GetAllProducts(){
       return Product::get();
    }

    public function AddProduct($request){
        return Product::create($request);
    }
    public function UpdateProductById($product,$request){
        $product->update($request);
    }
    public function DestroyProductById($product){
        $product->delete($product);
    }


}
