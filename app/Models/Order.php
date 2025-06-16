<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        use HasFactory;

    protected $primaryKey = 'orderId';
    protected $fillable = [
        'userId',
        'total_amount',
        'payment_method',
        'status',
    ];
    protected $casts = [
        'total_amount' => 'decimal:2',
        'payment_method' => 'string',
        'status' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'orderId', 'orderId');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'orderId', 'orderId');
    }
}
