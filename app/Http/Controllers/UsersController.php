<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function profileview(){
        return view('static.profile');
    }
    public function cartview(){
        return view('static.cart');
    }
}
