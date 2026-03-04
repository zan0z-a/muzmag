<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class BbController extends Controller
{

    public function aboutview()
    {
        return view('static.about');
    }

    public function contactsview()  {
        return view('static.contacts');
    }

    public function contactssubmit(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);
    $message = new Message();
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->text = $request->input('message');
    $message->save();

    return redirect()->route('contacts')->with('success','Сообщение отправлено');
}
}