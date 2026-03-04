<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function homeview(){       
        $goods = Goods::all();   // find([1,2]) // where('title' 'x') // where('id', '>', '2') //orderBy('id', 'desc')->get()
        return view('static.home')->with('goods', $goods);
    }
    public function shopview()  {
        $goods = Goods::all();
        return view('static.shop')->with('goods',$goods);
    }
    public function productview($id){
        $product = Goods::findOrfail($id);
        return view('static.product')->with('product', $product);
    }
    public function categoryview($category) {
        $goods = Goods::where('category', $category)->get();
        return view('static.category', [
            'goods' => $goods,
        ]);
    }
}



// $goods = new Goods();
        // $goods->title = 'class';
        // $goods->description = 'kryto';
        // $goods->img = 'bebe.png';
        // $goods->price = '1800'; 
        // $goods->save();