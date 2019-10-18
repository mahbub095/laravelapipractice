<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    public $timestamps = false;
    protected $fillable=[

        'name',
        'detail',
        'price',
        'stock'
    ];



}
