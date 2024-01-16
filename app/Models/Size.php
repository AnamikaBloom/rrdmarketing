<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    public function childcategory(){
        return $this->hasOne(ChildCategory::class,'id','childcategory_id');
    }
}
