@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li >
        <a href="#">Hóa đơn</a>
    </li>
    <div class="form-inline ml-auto">
		<a href="{{URL::route('customer.showAddCustomer') }}" class="btn btn-success btn-sm">Thêm mới</a>
    </div>
</ol>
<div class="card mb-3">
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Mã đơn</th>
          <th>Tên khách hàng</th>
          <th>Tổng tiền</th>
          <th>Ngày</th>
          <th>Trang thái</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($orders as $order)
        <tr>
          <td>1</td>
          <td>adadasd</td>
          <td align="right">{{number_format(11111)}} ₫</td>
          <td>11/11/2011</td>
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
</div>
@endsection