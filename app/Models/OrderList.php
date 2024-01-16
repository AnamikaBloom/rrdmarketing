<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderList extends Model
{
    use HasFactory,SoftDeletes;
    public function orders(){
        return $this->hasOne(Order::class,'id','order_id');
     }
    public function product(){
       return $this->hasOne(Product::class,'id','product_id');
    }

    public function productImg(){
        return $this->hasOne(ProductImage::class,'product_id','product_id');
     }
}
