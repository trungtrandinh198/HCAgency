<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    public function order_details(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function customer(){
    	return $this->belongsTo('App\Models\Customer','customers_id', 'id');
    }
}
