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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/sell.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="navbar">
      <p class="customerTag" customerid="0" style="width: 40%;color: #fff" data-toggle="modal" data-target="#customerList">
        <input id="inputIdCustomer" type="hidden" name="idCustomer" value="0">
        <input id="inputIdUser" type="hidden" name="idCustomer" value="0">
        <i class="fas fa-user-tag " style="color: green"></i> 
        <span id="nameCustomer">Khách Vãng lai</span>
      </p>
      <p style="text-align: right; width: 60%; color: #fff" >Tổng: <span id="total-bill"></span></p>
      <div style="width: 100%; height: 1px; background-color: #fff; margin-bottom: 5px"></div>
      <button class="btn btn-warning btn-sm">In đơn</button>
      <button class="btn btn-primary btn-sm">Lưu</button>
      <button class="btn btn-danger btn-sm">Hủy</button>
      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#productList">
      <i class="fas fa-cart-plus"></i>
      </button>
    </div>
    <form style="margin-bottom: 100px">
        <table class="table">
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
                <li id="1" class="list-group-item d-flex justify-content-between align-items-center" onclick="addProduct(this)">
                  <span class="spanNameProduct">Lèo</span>
                  <span class="spanPriceProduct">5000</span>
                <li id="2" class="list-group-item d-flex justify-content-between align-items-center" onclick="addProduct(this)">
                  <span class="spanNameProduct">Mè</span>
                  <span class="spanPriceProduct">2000</span>
                </li>
                <li id="3" class="list-group-item d-flex justify-content-between align-items-center" onclick="addProduct(this)">
                  <span class="spanNameProduct">nui</span>
                  <span class="spanPriceProduct">5000</span>
                </li>
                <li id="4" class="list-group-item d-flex justify-content-between align-items-center" onclick="addProduct(this)">
                  <span class="spanNameProduct">Tai</span>
                  <span class="spanPriceProduct">4000</span>
                </li>
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
                <li customer-id-select="1" customer-name-select="Nguyễn văn a" class="list-group-item d-flex justify-content-between align-items-center" onclick="addCustomer(this)">
                  <span >Nguyễn văn a</span>
                  <span>119 đỗ quang</span>
                </li>
                <li customer-id-select="2" customer-name-select="Nguyễn văn b" class="list-group-item d-flex justify-content-between align-items-center" onclick="addCustomer(this)">
                  <span >Nguyễn văn b</span>
                  <span>119 đỗ quang</span>
                </li>
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