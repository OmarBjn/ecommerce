<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function sizeAttribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'size_attribute_id');
    }

    public function colorAttribute()
    {
        return $this->belongsTo(ProductAttribute::class, 'color_attribute_id');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
