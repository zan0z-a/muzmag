<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\message;
use App\Models\Goods;

class AdminController extends Controller
{
    public function adminview(){
        $goods = Goods::get();
        return view('static.admin')->with('goods', $goods);
    }
    public function adminmessageview(){
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('static.message')->with('messages', $messages);
    }
    public function deletemessage($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('admin_message');
    }
    public function admin_delete_product($id){
        Goods::where('id',$id)->delete();  
        return redirect()->route('admin');
    }
    public function admin_add_product(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
        }
        Goods::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'img' => $imageName ?? 'default.jpg'
        ]);


        return redirect()->route('admin')->with('success', 'Товар добавлен');
    }
}
