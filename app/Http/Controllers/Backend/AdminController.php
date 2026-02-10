<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        if (Auth::user()->role == 'admin') {
            return $this->admin();
        } else if (Auth::user()->role == 'user') {
            return $this->user();
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
        
    }

    public function admin(){

        return view('backend.pages.dashboard.index');
    }

    public function user(){
        return view('backend.pages.dashboard.index');
    }
}
