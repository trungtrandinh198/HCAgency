@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ URL::route('customer.index') }}">Chỉnh sửa: </a>
    </li>
</ol>
@endsection