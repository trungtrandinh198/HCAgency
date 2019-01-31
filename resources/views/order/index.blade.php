@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li >
        <a href="#">Hóa đơn</a>
    </li>
    <div class="form-inline ml-auto">
		<a href="{{URL::route('order.index') }}" class="btn btn-success btn-sm">Thêm mới</a>
    </div>
</ol>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Mã đơn</th>
          <th>Tên khách</th>
          <th>Tổng tiền</th>
          <th>Thời gian</th>
          <th>Trang thái</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($orders as $order)
        <tr>
          <td align="center">
            <a href="{{URL::route('order.showOrder',['id' => $order->id]) }}">    
              {{$order -> id}}
            </a>
          </td>
          <td>{{$order->customer->name}}</td>
          <td align="right">{{number_format($order -> total_price)}} ₫</td>
          <td>{{date_format($order -> created_at,"H:i - d/m/Y")}}</td>
          <td align="center">
          	<i class="fas fa-clipboard-check" style="color: green"></i>
          </td>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
    <!-- chưa fix phân trang nằm bên phải -->
    	{!! $orders->links() !!}     	
  </div>
</div>
@endsection