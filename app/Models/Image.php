<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    public function product_item() : BelongsTo
    {
        return $this->belongsTo(ProductItem::class, 'product_item_id');
    }

}
