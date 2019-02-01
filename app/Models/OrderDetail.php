<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_details';

    public function product()
    {
    	return $this->belongsTo('App\Models\Product','products_id','id');
    }
}
