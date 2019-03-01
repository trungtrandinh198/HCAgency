@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ URL::route('category.index') }}">Thêm mới</a>
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
<form action="{{URL::route('category.addCategory') }}" method="POST">
	@csrf
	 <div class="form-group row">
	    <label for="nameCategory" class="col-sm-2 col-form-label">Tên danh mục</label>
	    <div class="col-sm-10">
	      <input name="name" type="text" class="form-control" id="nameCategory"autocomplete="off">
	    </div>
	 </div>
  	<div align="right">
	  	<a href="{{URL::route('category.index') }}" class="btn btn-danger">Hủy</a>
  		<button type="submit" class="btn btn-primary">Lưu</button>
  	</div>
</form>

@endsection