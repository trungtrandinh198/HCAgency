<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    public function orderDetails(){
        return $this->hasMany('App\Models\OrderDetail','products_id','id');
    }
    public function category(){
    	return $this->belongsTo('App\Models\Category','category_id','id');
    }
}
