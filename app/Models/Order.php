<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
