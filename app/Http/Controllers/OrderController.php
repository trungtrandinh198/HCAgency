<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\ImageBill;
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
        $orders = Order::where('isdelete',0)->orderBy('id', 'DESC')->paginate(20);
        return view('order.index',compact('orders'));
    }

    //hiển thị chi tiết hóa đơn
    public function showOrder($id){
        $order = Order::find($id);
        $imageBills = ImageBill::where('order_id',$id)->get();
        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        return view('order.detail',compact('order','orderDetails','imageBills'));
    }
    //hiển thị chi tiết hóa đơn
    public function updateStatusOrder($id){
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return back();
    }
    //up file image bill
    public function uploadImage(Request $request){
        $image = $request->select_file;
        $orderId = $request->order_id;
        if ($image == null) {
            return back();
        }
        
        $extension = $image -> getClientOriginalExtension();
        $namefile = $orderId.'-'.date('Ymd').Time().rand(11111, 99999).'.'.$extension;
        $image->move('img/bill' ,$namefile);
        $ulr =  'img/bill/'.$namefile;
        try{
            $img = new ImageBill;
            $img ->file_name = $namefile;
            $img ->order_id =$orderId;
            $img ->ulr =$ulr;
            $img ->save();
        }catch(\Exception $e){
            
        }
        return back();
    }
}
