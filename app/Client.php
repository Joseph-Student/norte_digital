<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

//    protected $attributes = [
//        'name' => null,
//        'price' => null,
//        'description' => null
//    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
