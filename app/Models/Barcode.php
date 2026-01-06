<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'table_number',
        'image',
        'qr_value',
        'user_id',
    ];

    // Define relationship to User model inverse one-to-many
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
