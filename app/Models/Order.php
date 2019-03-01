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
        return $this->hasMany('App\Models\OrderDetail','order_id','id');
    }

    public function customer(){
    	return $this->belongsTo('App\Models\Customer','customer_id', 'id');
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
