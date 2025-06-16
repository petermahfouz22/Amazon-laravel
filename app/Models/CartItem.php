<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
        use HasFactory;

    protected $primaryKey = 'cart_item_id';
    protected $fillable = [
        'userId',
        'productId',
        'quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'productId');
    }
}
