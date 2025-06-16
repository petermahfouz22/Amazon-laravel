<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
        use HasFactory;

    protected $primaryKey = 'order_item_id';
    protected $fillable = [
        'orderId',
        'productId',
        'quantity',
        'price_at_purchase',
    ];
    protected $casts = [
        'price_at_purchase' => 'decimal:2',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderId', 'orderId');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'productId');
    }
}
