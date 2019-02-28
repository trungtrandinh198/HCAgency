@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ URL::route('product.index') }}">Chỉnh sửa: </a>
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
<form action="{{URL::route('product.editProduct') }}" method="POST">
	<input type="hidden" name="id" value="{{$product->id}}">
@csrf
	 <div class="form-group row ">
	    <label for="nameProduct" class="col-sm-2 col-form-label">Tên hàng</label>
	    <div class="col-sm-10">
	      <input type="text" name="name" class="form-control" id="nameProduct" autocomplete="off" value="{{$product->name}}">
	    </div>
	 </div>
	 <div class="form-group row">
	    <label for="priceProduct" class="col-sm-2 col-form-label number">Giá (đ)</label>
	    <div class="col-sm-10">
	      <input type="number" name="price" class="form-control" id="priceProduct" autocomplete="off" value="{{$product->price}}">
	    </div>
	 </div>
	 <div class="form-group row">
	    <label for="selectCategoryForProduct" class="col-sm-2 col-form-label">Danh mục</label>
	    <div class="col-sm-10">
	      <select class="form-control" name="categoryId" id="categoryId">
	      	@foreach($categorys as $category)
	      		@if($category->id == $product->category_id)
      				<option selected="true" value="{{$category -> id}}">{{$category -> name}}</option>
      			@else
      				<option value="{{$category -> id}}">{{$category -> name}}</option>
      			@endif
      		@endforeach
  		</select>
	    </div>
	 </div>
  	<div align="right">
	  	<a href="{{URL::route('product.index') }}" class="btn btn-danger">Hủy</a>
  		<button type="submit" class="btn btn-primary" required>Lưu</button>
  	</div>
</form>
@endsection