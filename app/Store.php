<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $primaryKey = 'store_id';
    protected $table = 'stores';

}
