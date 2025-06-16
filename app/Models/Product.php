<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        use HasFactory;

    protected $primaryKey = 'productId';
    protected $fillable = [
        'product_title',
        'rating',
        'quantity_sold',
        'price',
        'discount_creditcard',
        'categoryId',
    ];
    protected $casts = [
        'rating' => 'decimal:2',
        'price' => 'decimal:2',
        'discount_creditcard' => 'json',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId', 'categoryId');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'productId', 'productId');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'productId', 'productId');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'productId', 'productId');
    }
}
