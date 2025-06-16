<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $primaryKey = 'addressId';
    protected $fillable = [
        'userId',
        'country',
        'city',
        'street',
        'postal_code',
        'is_default',
    ];
    protected $casts = [
        'is_default' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
