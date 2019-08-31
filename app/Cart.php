<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $primaryKey = 'cart_id';
    protected $table = 'carts';

}
