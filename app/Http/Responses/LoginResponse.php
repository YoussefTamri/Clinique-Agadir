<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {

        if(auth()->user()->is_admin){
            return $request->wantsJson()
             ? response()->json(['two_factor' => false])
             : redirect()->route('dashboard');
        }elseif(auth()->user()->is_super){
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route('dashboard');
        }else{
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route('index');

        }
    }
}
