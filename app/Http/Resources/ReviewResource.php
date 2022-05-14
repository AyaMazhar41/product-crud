<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'username'=>$this->user->name,
            'rate'=>$this->rate,
            'review'=>$this->review,
            'created_at' =>\Carbon\Carbon::parse($this->created_at)->format('d/m/Y'),
          ];
    }
}
