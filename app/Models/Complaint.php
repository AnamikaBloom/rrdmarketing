<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Complaint extends Model
{
    use HasFactory, SoftDeletes;
    public function users(){
        return $this->hasOne(User::class, 'id', 'user_id');
        }
        protected $table = 'complaints';
        protected $guarded = [];
}
