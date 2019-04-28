<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'price', 'description','image', 'category'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
