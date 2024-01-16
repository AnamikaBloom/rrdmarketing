<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserPackage extends Model
{
    use HasFactory,SoftDeletes;
    public function Package(){
        return $this->hasOne(Package::class,'id','package_id');
    }
}
