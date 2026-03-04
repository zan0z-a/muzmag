<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
                        ->with('goods')
                        ->get();
        return view('static.cart')->with('cartItems',$cartItems);
    }

    public function add(Request $request, $id)
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    Cart::create([
        'user_id' => Auth::id(),
        'goods_id' => $id
    ]);

    return redirect()->route('cart');
}

    public function remove($id)
    {
        Cart::where('user_id', Auth::id())
            ->where('id', $id)
            ->delete();

        return redirect()->route('cart');
    }

    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();
        return redirect()->route('cart');
    }
}