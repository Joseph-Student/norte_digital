<?php

namespace App\Http\Resources;

use App\Http\Resources\Product as ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => base64_encode($this->id . $this->name),
            'name' => $this->name,
            'description' => $this->description,
            'products' => ProductResource::collection($this->products)
        ];
    }
}
