<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
     protected $fillable = [ 
        'title',
        'description',
        'price',
        'category',
        'img'
    ];
    public function carts()
{
    return $this->hasMany(Cart::class);
}
}
