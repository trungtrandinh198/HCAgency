@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Chỉnh sửa: {{$customer->name}}</a>
    </li>
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
<form action="{{URL::route('customer.editCustomer') }}" method="POST">
	@csrf
	<input type="hidden" name="id" value="{{$customer->id}}">
	 <div class="form-group row">
	    <label for="nameCustomer" class="col-sm-2 col-form-label">Tên khách hàng</label>
	    <div class="col-sm-10">
	      <input type="text" name="name" class="form-control" id="nameCustomer" autocomplete="off" value="{{$customer->name}}" >
	    </div>
	 </div>
	 <div class="form-group row">
	    <label for="addressCustomer" class="col-sm-2 col-form-label">Địa chỉ</label>
	    <div class="col-sm-10">
	      <input type="text" name="address" class="form-control" id="addressCustomer" autocomplete="off"  value="{{$customer->address}}" >
	    </div>
	 </div>
	 <div class="form-group row">
	    <label for="phoneCustomer" class="col-sm-2 col-form-label">Số điện thoại</label>
	    <div class="col-sm-10">
	      <input type="text" name="phone_number" class="form-control" id="phoneCustomer" autocomplete="off" value="{{$customer->phone_number}}">
	    </div>
	 </div>
  	<div align="right">
	  	<a href="{{URL::route('customer.index') }}" class="btn btn-danger">Hủy</a>
  		<button type="submit" class="btn btn-primary" required>Lưu</button>
  	</div>
</form>
@endsection