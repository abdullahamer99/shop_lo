<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserFullResource;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{

    public function index()
    {
        $user=User::paginate();
        return $this->sendResponse(UserFullResource::collection($user),' All Users ');
    }

    public function store(Request $request)
    {

    }

    public function show(CartItem $cartItem)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartItem $cartItem)
    {
        //
    }
}
