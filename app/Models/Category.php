<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'categoryId';
    protected $fillable = ['category_name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'categoryId', 'categoryId');
    }
}
