<?php

namespace App\Model;
use App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=['product_id','customer','review','star'];
    
    public function product(){

        return $this->belongsTo(Product::class);
    }
}
