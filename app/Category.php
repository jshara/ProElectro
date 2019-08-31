<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $primaryKey = 'cat_id';
    protected $table = 'categories';

    public function item(){
        return $this->hasMany('App\Item', 'cat_id');
    }
}
