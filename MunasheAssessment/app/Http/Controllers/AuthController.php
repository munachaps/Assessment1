<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use function Laravel\Prompts\error;

class AuthController extends Controller
{


    public function login(){
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $input = $request->all();
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);


        if(Auth::guard('admin')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            return redirect()->route('admin/home');
        }

        else{

        }

    }


    public function logout()
    {
        if(Auth::guard('admin')){
            Auth::guard('admin')->logout();
            return redirect()->route('login');
        }

    }

}
