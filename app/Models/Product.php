<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function productItems()
    {
        return $this->hasMany(ProductItem::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'image_id');
    }

    // public function cartItems()
    // {
    //     return $this->hasMany(CartItem::class);
    // }// need explination 

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
