<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'type', 'value', 'expires_at', 'usage_limit'];

    protected $casts = [
        'expires_at' => 'datetime',
    ];
}