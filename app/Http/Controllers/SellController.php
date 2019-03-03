<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
use DB;
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
        $customers= Customer::where('isdelete',0)->get();
		return view('sell.index',compact('products','customers'));
	}

    public function saveOrder(Request $request){
      
        $arrProductAndQuantity = $request->data;
        $idOrder = 0;
        $total_order = 0;
        DB::beginTransaction();
        try{
            $order = new Order;
            $order ->user_id = Auth::id();
            $order ->customer_id =  $request->idCustomer;
            $order ->status =0;
            $order ->total_price =0;
            $order ->save();
            $idOrder = $order->id;
            foreach($arrProductAndQuantity as $key => $item) {
                foreach($item as $id => $quantity) {
                    $price = Product::find($id)->price;
                        $orderDetail = new OrderDetail;
                        $orderDetail ->order_id = $idOrder;
                        $orderDetail ->product_id = $id;
                        $orderDetail ->price = $price;
                        $orderDetail ->quantity = $quantity;
                        $orderDetail ->save();
                        $total_order += $price*$quantity;
                }
            }
            $order =  Order::find($idOrder);
            $order ->total_price =$total_order;
            $order ->save();
            DB::commit();
        }catch(\Exception $e){
           DB::rollback();
           return "0";
        }
        $link = "sell/print/".$idOrder;
        return $link;
    }
    public function printBill($id){
        $order = Order::find($id);
        $orderDetails= OrderDetail::where('order_id',$id)->get();
        return view('sell.printBill',compact('order','orderDetails'));
    }
}
