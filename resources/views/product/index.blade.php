@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li >
        <a href="#">Hàng hóa</a>
    </li>
    <div class="form-inline ml-auto">
		<a href="{{URL::route('product.showAddProduct') }}" class="btn btn-success btn-sm">Thêm mới</a>
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
          <th>Tên hàng</th>
          <th>Giá cả</th>
          <th>Danh mục</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      	@foreach($products as $product)
        <tr>
          <td>
          	<a href="{{URL::route('product.showEditProduct',['id' => $product->id]) }}">
          		{{$product -> name}}
          	</a>
          </td>
          <td align="right">{{number_format($product -> price)}} ₫</td>
          <td>{{$product -> category -> name}}</td>
          <td style="text-align: center;">
          	<form action="{{URL::route('product.deleteProduct',['id' => $product->id]) }}" method="POST">
          		{{method_field('DELETE')}}
          		@csrf
          		<input type="hidden" name="id" value="{{$product -> id}}">
          		<button class="btn btn-danger btn-sm" type="submit">Xóa</button>
          	</form>
          	
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
    <!-- chưa fix phân trang nằm bên phải -->
    	{!! $products->links() !!}     	
  </div>
</div>
</div>
@endsection