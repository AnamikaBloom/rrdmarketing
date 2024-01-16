<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'expedition',
        'amount',
        'daily_profit_percent',
        'daily_profit_amount',
        'duration',
        'packages',
        'gst',
        'slug',
        'status'
    ];
}
