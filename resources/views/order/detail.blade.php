@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li >
        <a href="#">Hóa đơn</a>
    </li>
    <div class="form-inline ml-auto">
		<div class="btn btn-info btn-sm">
		<i class="fas fa-print"></i>
		 In hóa đơn
	</div>
    </div>
</ol>
<div class="row">
	
	<div class="col-sm-4">
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
			Trạng thái: <span class="font-weight-bold">Đã thanh toán</span>
		</div>
	</div>
	<div class="col-sm-8" align="right">
		<img style="height: 120px;width: 60" src="https://thueketoan.vn/wp-content/uploads/2017/09/nhung-thu-tuc-can-lam-khi-dat-hoa-don-hinh-cover-400x567.jpg">
		<img style="height: 120px;width: 60" src="https://thueketoan.vn/wp-content/uploads/2017/09/nhung-thu-tuc-can-lam-khi-dat-hoa-don-hinh-cover-400x567.jpg">
		<img style="height: 120px;width: 60" src="https://thueketoan.vn/wp-content/uploads/2017/09/nhung-thu-tuc-can-lam-khi-dat-hoa-don-hinh-cover-400x567.jpg">
		<img style="height: 120px;width: 60" src="https://thueketoan.vn/wp-content/uploads/2017/09/nhung-thu-tuc-can-lam-khi-dat-hoa-don-hinh-cover-400x567.jpg">
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
