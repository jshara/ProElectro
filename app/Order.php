<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $primaryKey = 'order_id';
    protected $table = 'orders';

    public function item(){
        return $this->hasMany('App\Item', 'order_id');
    }
}
