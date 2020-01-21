<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name'];

    public function gender(){
        return $this->belongsTo('App\Gender');
    }
}
