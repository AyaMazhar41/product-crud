<?php

namespace App\Http\Controllers\Api;
use App\Interfaces\CartRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\CartRequest;
use App\Http\Resources\CartResource;

class CartController extends Controller
{
  public function AddToCart(CartRepositoryInterface $CartRepositoryInterface,CartRequest $request)
    {
        $carts =  $CartRepositoryInterface->addorder($request->validated());
        return \responder::success(new CartResource($carts));
    }
    public function GetOrders(CartRepositoryInterface $CartRepositoryInterface)
    {
        $orders = $CartRepositoryInterface->getAllMyOrder();
        return \responder::success(CartResource::collection($orders));

    }
}
