<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        if ($request->role == 'admin') {
            return redirect('admin/dashboard');
        } elseif ($request->role == 'user') {
            return redirect('shop');
        } else {
            return redirect()->route('shop');
        }
    }
}
