<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        //  dd(Auth::user()->role);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/dashboard');
        } else if (Auth::user()->role == 'user') {
            return redirect('shop');
        } else {
            return redirect()->route('shop');
        }
    }
}
