@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
</ol>
<div class="card-footer small text-muted">Thống kê trong tháng 1</div>
<div class="row">
	</ol>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
      	<div class="card-header text-white  z-1" href="#">
          <span class="float-left">Sản phẩm đã bán</span>
        </div>
        <div class="card-body">
          <div style="">1000</div>
        </div>
       
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
      	<div class="card-header text-white  z-1" href="#">
          <span class="float-left">bán nhiều nhất</span>
        </div>
        <div class="card-body">
          <div class="mr-5">thèo lèo</div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
      	<div class="card-header text-white  z-1" href="#">
          <span class="float-left">Khách hàng mua nhiều nhất</span>
        </div>
        <div class="card-body">
          <div class="mr-5">Tony Nguyễn</div>
        </div>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
      	<div class="card-header text-white  z-1" href="#">
          <span class="float-left">Ngày bán nhiều nhất</span>
        </div>
        <div class="card-body">
          <div class="mr-5">11/1/2019</div>
        </div>
        </a>
      </div>
    </div>
 </div>
@endsection
