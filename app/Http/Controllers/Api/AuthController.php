<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserApiResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
class AuthController extends BaseController
{

    public function register(Request $request){
        $validator=Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user=new User();
        $user->first_name= $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email     = $request->input('email');
        $user->password  = Hash::make($request->input('password'));
        $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));
        $user->save();
        return $this->sendResponse(new UserApiResource($user),'Register Successfully');
    }


    public function login(Request $request)
    {
        $validator=validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
        $username=$request->input('email');
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $user= User::where('email',$username)->first();
            return $this->sendResponse(new UserApiResource($user),'Login Successfully');

        }
        return $this->sendError('error', 'Login attempt failed ');
    }
}
