<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'total_price', 'delivary', 'grand_total', 'status', 'payment_method'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}