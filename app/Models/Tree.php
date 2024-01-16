<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function left_user(){
        return $this->hasOne(User::class,'id','left_user_id');
    }
    public function middle_user(){
        return $this->hasOne(User::class,'id','middle_user_id');
    }
    public function right_user(){
        return $this->hasOne(User::class,'id','right_user_id');
    }
    public function fourth_user(){
        return $this->hasOne(User::class,'id','fourth_user_id');
    }
}
