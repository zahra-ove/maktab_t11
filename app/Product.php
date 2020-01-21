<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // product table has one to many relationship with categories table. each category belongs to many product and each product has one category
    public function category(){
        return $this->belongsTo('App\Category');
    }


    // product table has one to many relationship with pimages table. each product has many images and each image belongs to one product
    public function pimages(){
        return $this->hasMany('App\Pimage');
    }
}
