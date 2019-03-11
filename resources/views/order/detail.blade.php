@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li >
        <a href="{{ URL::route('order.index') }}">Hóa đơn</a>
    </li>
    <div class="form-inline ml-auto">
    	@if($order ->status == '0')
    	<a class="btn btn-success btn-sm" href="{{ URL::route('order.updateStatusOrder',['id' => $order->id])}}">
 			Xác nhận thanh toán
    	</a>
    	@endif
    	<div style="margin-left: 5px">
    		<a class="btn btn-info btn-sm" target="_blank" href="{{ URL::route('sell.printBill',['id' => $order->id])}}">
		<i class="fas fa-print"></i>
		 In hóa đơn
	</a>
    	</div>
		
    </div>
</ol>
<div class="row">
	
	<div class="col-sm-6">
		<div >
			Mã đơn: <span class="font-weight-bold">{{$order->id}}</span>
		</div>
		<div>
			Khách hàng: <span class="font-weight-bold">{{$order->customer->name}}</span>
		</div>
		<div>
			Thời gian: <span class="font-weight-bold">{{date_format($order -> created_at,"H:i - d/m/Y")}}
		</div>
		<div>
			Tổng tiền: <span class="font-weight-bold">{{number_format($order -> total_price)}} đ</span>
		</div>
		<div>
			<span>Trạng thái:</span>  
			<span class="font-weight-bold">
				@if($order ->status == '0')
					Chưa thanh toán
				@else
					Đã thanh toán
				@endif
			</span>
		</div>
		<div>
			Bản bởi: <span class="font-weight-bold">{{$order->user->name}}</span>
		</div>
		<form method="post" action="{{URL::route('order.uploadImage')}}" enctype="multipart/form-data">
    	@csrf
	    	<div>Cập nhập ảnh hóa đơn</div>
	    	<input type="hidden" name="order_id" value="{{$order->id}}">
	       	<input type="file" class="btn-sm" name="select_file" style="max-width: 75%">
	       	<input type="submit" name="upload" class="btn btn-primary btn-sm" value="Tải lên">
   		</form>
	</div>
	<div class="col-sm-6" align="right">
		@foreach($imageBills as $imageBill)
		<a href="{{$imageBill->ulr}}" target="_blank">
			<img style="height: 120px;width: 60" src="{{$imageBill->ulr}}">
		</a>
		
		@endforeach
	</div>

</div>
<div class="card-body">
	<h4 >Chi tiết đơn hàng</h4>
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
          <th>Tổng</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($orderDetails as $orderDetal)
        <tr>
          <td>{{$orderDetal->product->name}}</td>
          <td align="right">{{number_format($orderDetal->quantity)}}</td>
          <td align="right">{{number_format($orderDetal->price)}} ₫</td>
          <td align="right">{{number_format($orderDetal->quantity*$orderDetal->price)}} ₫</td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
