<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'reviewId';
    protected $fillable = [
        'userId',
        'productId',
        'rating',
        'comment',
    ];
    protected $casts = [
        'rating' => 'integer',
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
