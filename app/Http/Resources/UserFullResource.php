<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserFullResource extends JsonResource
{
    public function toArray($request)
    {
        return [
        'id'=>             $this->id,
        'first_name'=>     $this->first_name,
        'last_name'=>      $this->last_name,
        'email'=>          $this->email,
        'email_verified'=> $this->email_verified,
        'password'=>       $this->password,
        'mobile'=>         $this->mobile,
        'mobile_verified'=> $this->mobile_verified,
        'shipping_address'=> new AddressResource($this->shippingAddress),
        'billing_address'=> new AddressResource($this->billingAddress),
        'api_token'=>      $this->api_token,
        'member_since'=>   $this->created_at->format('l js \\of  F Y'),
        ];
    }
}
