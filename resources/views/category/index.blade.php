@extends('layouts.app')

@section('content')
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
<div class="card-header" align="right">
  <a href="{{URL::route('category.showAddCategory') }}" class="btn btn-success btn-sm">Thêm mới</a>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Mã số</th>
          <th>Tên danh mục</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      	@foreach($categorys as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
          <td style="text-align: center;">
          	<a id="" class="btn btn-info" href="{{URL::route('category.showEditCategory',['id' => $category->id]) }}">Chỉnh sửa</a>
          	<span id="{{$category->id}}" onclick="deleteCategory('{{$category->id}}')" class="btn btn-danger" >Xóa</span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- chưa fix phân trang nằm bên phải -->
    	{!! $categorys->links() !!}     	
  </div>
</div>
@endsection
<script type="text/javascript">
  function deleteCategory(id) {
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
    $.post('{{URL::route("category.deleteCategory",["id" => '3']) }}')
    }
  }
</script>