<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductRessource extends JsonResource
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
            'product_id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'unit'=>new UnitResource($this->hasUint),
            'price'=>number_format($this->price),
            'total'=>number_format($this->total),
            'discount'=>number_format($this->discount),
            'option'=>$this->option,
            'category'=>new CategoryRessource($this->category),

            'images'=> ImageRessource::collection(
                $this->images
            ),
            'tag'=> TagResource::collection($this->tags),
            'reviews'=>ReviewResource::collection($this->reviews),
            'product_option'=>$this->jsonOptions()


        ];
    }
}
