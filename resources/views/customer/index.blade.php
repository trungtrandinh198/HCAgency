@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li >
        <a href="#">Khách hàng</a>
    </li>
    <div class="form-inline ml-auto">
		<a href="{{URL::route('customer.showAddCustomer') }}" class="btn btn-success btn-sm">Thêm mới</a>
    </div>
</ol>
@if(session('Success'))
    <div class="alert alert-success">
      {{session('Success')}}
    </div>
@endif

@if(session('Fail'))
    <div class="alert alert-danger">
      {{session('Fail')}}
    </div>
@endif
<div class="card mb-3">
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Tên khách hàng</th>
          <th>Số điện thoại</th>
          <th>Địa chỉ</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      	@foreach($customers as $customer)
        <tr>
          <td>
            <a href="{{URL::route('customer.showEditCustomer',['id' => $customer->id]) }}">
              {{$customer -> name}}
            </a>
          </td>
          <td>{{$customer -> phone_number}}</td>
          <td>{{$customer -> address}}</td>
          <td style="text-align: center;">
            <form action="{{URL::route('customer.deleteCustomer',['id' => $customer->id]) }}" method="POST">
              {{method_field('DELETE')}}
              @csrf
              <input type="hidden" name="id" value="{{$customer -> id}}">
              <button class="btn btn-danger btn-sm" type="submit">Xóa</button>
            </form>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
    <!-- chưa fix phân trang nằm bên phải -->
    	{!! $customers->links() !!}     	
  </div>
</div>
</div>
@endsection