<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardReward extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'referral_count',
        'award',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
