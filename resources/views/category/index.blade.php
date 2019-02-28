@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li >
    <a href="{{ URL::route('category.index') }}">Danh mục</a>
  </li>
  <div class="form-inline ml-auto">
    <a href="{{URL::route('category.showAddCategory') }}" class="btn btn-success btn-sm">Thêm mới</a>
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
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Tên danh mục</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($categorys as $category)
      <tr>
        <td>
          <a href="{{URL::route('category.showEditCategory',['id' => $category->id]) }}"> {{$category->name}}
          </a>
        </td>
        <td style="text-align: center;">
          <form action="{{URL::route('category.deleteCategory',['id' => $category->id]) }}" method="POST">
            {{method_field('DELETE')}}
            @csrf
            <input type="hidden" name="id" value="{{$category -> id}}">
            <button class="btn btn-danger btn-sm" type="submit">Xóa</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- chưa fix phân trang nằm bên phải -->
  {!! $categorys->links() !!}       
</div>
@endsection