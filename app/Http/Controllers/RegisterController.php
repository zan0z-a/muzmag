<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showregister()
    {
        return view('static.register');
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:users|min:10',
            'password' => 'required|string|min:6|confirmed',
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->is_admin = '0';
        $user->save();
        
        return redirect()->route('login')->with('success', 'Выполните вход');
    }
}