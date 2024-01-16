<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function orderlists(){
        return $this->hasMany(OrderList::class,'order_id','id');
    }

    public function states(){
        return $this->hasOne(State::class,'id','state');
    }

}
