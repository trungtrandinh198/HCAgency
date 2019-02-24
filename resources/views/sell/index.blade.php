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
</head>
<body>
   <div class="navbar">
      <p class="customerTag" customerid="0" style="width: 40%;color: #fff" data-toggle="modal" data-target="#customerList">
         <input id="inputIdCustomer" type="hidden" name="idCustomer" value="0">
         <i class="fas fa-user-tag " style="color: green"></i> 
         <span id="nameCustomer">Khách Vãng lai</span>
         
      </p>
      <p style="text-align: right; width: 60%; color: #fff" >
         <strong>Tổng tiền:</strong>  600,000 VND 
      </p>
      <div style="width: 100%; height: 1px; background-color: #fff; margin-bottom: 5px"></div>
      <button class="btn btn-warning btn-sm">In đơn</button>
      <button class="btn btn-primary btn-sm">Lưu</button>
      <button class="btn btn-danger btn-sm">Hủy</button>
      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#productList">
         <i class="fas fa-cart-plus"></i>
      </button>
   </div>

   <table class="table" style="margin-bottom: 80px">
      <thead>
         <tr>
            <th>Tên</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
         </tr>
      </thead>
      <tbody id="tbody-cart">
         <tr class="tr-product">
            <td>
               <span style="color: red">
                  <i class="fas fa-window-close"></i>
               </span>
               <span>bánh</span>
            </td>
            <td>5 000</td>
            <td>
               <div class="form-group" style="width: 90px">
                  <input class="form-control" type="number" name="" min="1" style="width: 60px; height: 24px">
               </div>
            </td>
            <td>25 000</td>
         </tr>
      </tbody>
   </table>
</div>
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
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <span>Lèo</span>
                  <span>5,000 vnd</span>
                  <span id="1" class="badge badge-primary badge-pill" onclick="addProduct(this)">Thêm</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <span>Mè</span>
                  <span>5,000 vnd</span>
                  <span id="2" class="badge badge-primary badge-pill" onclick="addProduct(this)">Thêm</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <span>nui</span>
                  <span>5,000 vnd</span>
                  <span id="4" class="badge badge-primary badge-pill" onclick="addProduct(this)">Thêm</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <span>Tai</span>
                  <span>5,000 vnd</span>
                  <span id="3" class="badge badge-primary badge-pill" onclick="addProduct(this)">Thêm</span>
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
<!-- Modal product-->
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

</body>
</html>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/js/sell.js"></script>
<style>
.navbar {
   overflow: hidden;
   background-color: #333;
   position: fixed;
   bottom: 0;
   width: 100%;
}
.navbar a {
   float: left;
   display: block;
   color: #f2f2f2;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   font-size: 17px;
}
.navbar a:hover {
   background: #ddd;
   color: black;
}
.main {
   padding: 16px;
   margin-bottom: 30px;
   height: 1500px; /* Used in this example to enable scrolling */
}
</style>