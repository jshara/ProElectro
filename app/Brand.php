<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $primaryKey = 'brand_id';
    protected $table = 'brands';

    public function item(){
        return $this->hasMany('App\Item', 'brand_id');
    }
}
