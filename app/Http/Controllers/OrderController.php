<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
class OrderController extends Controller
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
     * Show list order.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::paginate(20);
        return view('order.index',compact('orders'));
    }

    //hiển thị chi tiết hóa đơn
    public function showOrder($id){
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('ordes_id', $order->id)->get();
        return view('order.detail',compact('order','orderDetails'));
    }
}
