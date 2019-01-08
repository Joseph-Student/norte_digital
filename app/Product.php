<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

//    protected $attributes = [
//        'name' => null,
//        'description' => null
//    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
