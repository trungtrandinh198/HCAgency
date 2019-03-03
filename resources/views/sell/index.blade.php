<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link rel="icon" href="{{asset('/img/logo.PNG')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đại lý Hùng Chính</title>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <base href="{{asset('')}}">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{ asset('css/sell.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="navbar">
      <p class="customerTag" style="width: 40%;color: #fff" data-toggle="modal" data-target="#customerList">
        <i class="fas fa-user-tag " style="color: green"></i> 
        <span id="nameCustomer">Khách lẻ</span>
      </p>
      <input type="hidden"  id="addressCustomer" value="qưewqe">
      <input type="hidden"  id="phoneCustomer" value="ewqeq">
      <p style="text-align: right; width: 60%; color: #fff" >Tổng: <span id="total-Order">0</span> VND</p>
      <div style="width: 100%; height: 1px; background-color: #fff; margin-bottom: 5px"></div>
      <button class="btn btn-warning btn-sm" onclick="backHome()"><i class="fas fa-arrow-circle-left"></i> <span>Trở về</span></button>
      <button class="btn btn-primary btn-sm" onclick="saveOrder()">Lưu</button>
      <button class="btn btn-danger btn-sm" onclick="location.reload()">Hủy</button>
      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#productList">
      <i class="fas fa-cart-plus"></i>
      </button>
    </div>
    <form id="form" action="{{URL::route('sell.saveOrder') }}" method="POST" style="margin-bottom: 100px">
      @csrf
      <input id="inputIdCustomer" type="hidden" name="idCustomer" value="1">
      <table class="table" id="table-cart">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col">SL</th>
            <th scope="col">Tổng</th>
          </tr>
        </thead>
        <tbody id="tbody-cart">
          <!-- content-->
        </tbody>
      </table>
    </form>
    <!-- Modal product-->
    <div class="modal fade" id="productList" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            Sản phẩm
          </div>
          <div class="modal-body">
            <div style="height: 400px;">
              <ul style="overflow-y: scroll; height: 100%; margin-left: -40px;" >
                @foreach($products as $product)
                <li id="{{$product -> id}}" class="list-group-item d-flex justify-content-between align-items-center" onclick="check(this)">
                  <span class="spanNameProduct">{{$product -> name}}</span>
                  <span class="spanPriceProduct">{{$product -> price}}</span>
                </li>
                @endforeach()
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
    <!--end Modal -->
    <!-- Modal customer-->
    <div class="modal fade" id="customerList" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <input type="text" class="form-control" id="search">
          </div>
          <div class="modal-body">
            <div style="height: 400px;">
              <ul style="overflow-y: scroll; height: 100%; margin-left: -40px;" >
                @foreach($customers as $customer)
                <li customer-id-select="{{$customer->id}}" customer-name-select="{{$customer->name}}" customer-address-select="{{$customer->address}}" customer-phone-select="{{$customer->phone_number}}" class="list-group-item d-flex justify-content-between align-items-center" onclick="addCustomer(this)">
                  <span >{{$customer->name}}</span>
                  <span>{{$customer->address}}</span>
                </li>
                @endforeach()
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
    <!--end Modal -->
  </body>
</html>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/js/sell.js"></script>