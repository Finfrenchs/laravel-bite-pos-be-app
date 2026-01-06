<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_code',
        'customer_name',
        'phone',
        'external_id',
        'checkout_link',
        'barcode_id',
        'table_name',
        'payment_status',
        'payment_method',
        'subtotal',
        'tax',
        'total',
    ];

    // Define relationship to Barcode model inverse many-to-one
    public function barcode()
    {
        return $this->belongsTo(Barcode::class);
    }

    // Define relationship to TransactionItem model one-to-many
    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class, 'transaction_id');
    }
}
