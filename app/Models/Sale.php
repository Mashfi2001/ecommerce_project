<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'price',
        'total',
    ];

    // Optional: relationship to Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
