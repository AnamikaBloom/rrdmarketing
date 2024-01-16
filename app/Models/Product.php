<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    public function product_image(){
        // dd($this->id);
        return $this->hasMany('App\Models\ProductImage','product_id','id');
    }
    public function category(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }
    public function subcategory(){
        return $this->hasOne('App\Models\SubCategory','id','subcategory_id');

    }
    public function childcategory(){
        return $this->hasOne('App\Models\ChildCategory','id','childcategory_id');

    }
    public function single_image(){
        // dd($this->id);
        return $this->belongsTo('App\Models\ProductImage','id','product_id');
    }
    public function color(){
        return $this->hasMany('App\Models\Color','product_id','id');
    }
    public function size(){
        return $this->hasMany('App\Models\Size','product_id','id');
    }
}
