<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'model_type', 'model_id', 'review', 'rate',
    ];
    public function model()
     {
         return $this->morphTo();
     }
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
