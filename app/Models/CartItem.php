<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // } not clear 

    public function productItem()
    {
        return $this->belongsTo(ProductItem::class, 'product_item_id');
    }
}
