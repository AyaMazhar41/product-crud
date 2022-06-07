<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\passwordTrait;

class Driver extends Model
{
    use HasFactory,passwordTrait;
    protected $fillable = [
        'name',
        'email',
        'password',
        'lat',
        'lng'
    ];
}
