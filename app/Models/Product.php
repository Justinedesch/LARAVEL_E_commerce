<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //public $timestamps=false;

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }


    public function Orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

}


