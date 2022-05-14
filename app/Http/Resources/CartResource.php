<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'payment_method'=>$this->payment_method,
            'products'=>CartItemsResource::collection($this->items),
            'product_price'=>$this->total_price,
            'grand_total'=>$this->grand_total
        ];

    }
}
