<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'price_discount',
        'discount_percent',
        'is_promo',
        'image',
        'category_id',
    ];

    // Define relationship to Category model inverse many-to-one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // Define relationship to TransactionItem model one-to-many
    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
