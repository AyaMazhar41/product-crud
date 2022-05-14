<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Product extends Model
{
    use HasFactory ,LogsActivity;
    protected $fillable = [
        'title',
        'price',
        'description'
    ];
    public function reviews()
    {
        return $this->morphMany(Review::class,'model');
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
