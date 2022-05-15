<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Services\TapServices;
class PaymentController extends Controller
{
    private $tapServices;
    public function __construct(TapServices $tapServices)
    {
        $this->tapServices = $tapServices;
    }
    public function payOrder(Request $request)
    {
        $validated = $request->validate([
            'cart_id' => 'required|exists:carts,id',
        ]);
        $cart = Cart::find($request->cart_id);
        $user = auth()->user();
        $data = (object) ["amount" => $cart->grand_total,
        "currency"  =>"KWD",
        "customer" => [
            "first_name"=> $user->name,
            "email" => $user->email,
            "phone" => [
              "country_code" => "965",
              "number" => "50000000"
            ]
            ],
            "source" => [
                "id" => "src_kw.knet"
            ],

         ];
        return $this->tapServices->sendPaymentData($data);
    }
}
