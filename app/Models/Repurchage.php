<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Repurchage extends Model
{
    use HasFactory,SoftDeletes;
    public function rank(){
        return $this->hasOne(RankManagement::class,'id','rank_id');
    }
}
