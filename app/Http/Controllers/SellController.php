<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
     * Show list product.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	public function index(){
        $products = Product::all();
        $customers= Customer::all();
		return view('sell.index',compact('products','customers'));
	}

    public function saveBill(Request $request){
      
        $arrProductAndQuantity = $request->data;
        $idOrder = 0;
        $total_order = 0;
        try{
            $order = new Order;
            $order ->user_id = Auth::id();
            $order ->customer_id =  $request->idCustomer;
            $order ->status =0;
            $order ->total_price =0;
            $order ->save();
            $idOrder = $order->id;
        }catch(\Exception $e){
           return $e;
        }

        foreach($arrProductAndQuantity as $key => $item) {
            foreach($item as $id => $quantity) {
                $price = Product::find(3)->price;
                try{
                    $orderDetail = new OrderDetail;
                    $orderDetail ->order_id = $idOrder;
                    $orderDetail ->product_id = $id;
                    $orderDetail ->price = $price;
                    $orderDetail ->quantity = $quantity;
                    $orderDetail ->save();
                    $total_order += $price*$quantity;
                }catch(\Exception $e){
                    return $e;
                }
            }
        }
        try{
            $order =  Order::find($idOrder);
            $order ->total_price =$total_order;
            $order ->save();
        }catch(\Exception $e){
           return $e;
        }
        
        return "true";
        
    }
}
