<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{



    public function formLogin(){
        return view('auth.login');
    }
    public function  login(LoginRequest $request){
        $credenciales = $request->only(['email','password']);
        if(Auth::attempt($credenciales)){
            return redirect('/dashboard');
        }
        return redirect('/auth/login')->withErrors(['email'=>trans('auth.failed')])->withInputs(request('email'));
    }
    public function logout(){
        Auth::logout();
        return redirect('auth/login');
    }
}
