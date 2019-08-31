<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{    
    public $primaryKey = 'item_id';
    protected $table = 'items';

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
