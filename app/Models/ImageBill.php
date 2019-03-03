<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageBill extends Model
{
    //
    protected $table = 'image_bills';

    public function order_details(){
        return $this->belongsTo('App\Models\Order','order_id','id');
    }
}
