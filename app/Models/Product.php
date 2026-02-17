<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'status', 'tag', 'size', 'color', 'description', 'base_price', 'discount_price', 'image', 'stock', 'sku', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
