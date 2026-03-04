<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showlogin()
    {
        return view('static.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);
        
        $user = User::where('phone', $request->phone)->first();
        
        if ($user && password_verify($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('profile');
        }
        
        return back()->withErrors([
            'phone' => 'Неверный телефон или пароль',
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}