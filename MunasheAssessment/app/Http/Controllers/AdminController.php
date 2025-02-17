<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
         return view('admin.home');
    }

    public function logout()
    {
        if(Auth::guard('admin')){
            Auth::guard('admin')->logout();
            return redirect()->route('login');
        }
    }
}
