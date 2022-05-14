<?php
namespace App\Repositories;
 use App\Interfaces\CartRepositoryInterface;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Resources\CartResource;
class CartRepository implements CartRepositoryInterface{

    public function addorder($request){
        $inputs = $request;
        $inputs['user_id'] =  auth('api')->user()->id;
        $inputs['total_price'] = 0;
        $cart_items = [];
        // add items to cart //
        foreach ($inputs['items'] as $key => $item) {
            $product = Product::findOrFail($inputs['items'][$key]['id']);
            $qty =$inputs['items'][$key]['qty'];
            $inputs['total_price'] += ($product->price * $qty);
            // create array of items //
            $cart_items[$key] = [
                    'product_id' => $product->id,
                    'qty' => $qty,
                    'price' => $product->price
            ];

        }
        $inputs['grand_total'] = $inputs['total_price'];
        $cart = Cart::create($inputs);
        $cart->items()->createMany($cart_items);
        return $cart;

    }




}
