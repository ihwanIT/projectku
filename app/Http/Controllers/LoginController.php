<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return  view('admin.index');
        
    }
    public function login(Request $request):RedirectResponse
    {
        $credentials = $request->validate([
            'name' => 'required',
            // 'email' => 'required|email',
            'password' => 'required',
        ]);
        // $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {       
            $request->session()->regenerate();
            return redirect('/datakos')->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'name' => "Username atau Password Salah!",
            'password' => "Username atau Password Salah!",
        ])->onlyInput("name");
    }
}