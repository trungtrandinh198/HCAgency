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
        <div class="container" style="padding:-80px">
            <div class="row" style="height: 500px">
                <div class="block col-lg-6">
                    <strong>Đơn hàng</strong>
                    <div  style="height: 500px;overflow-y: scroll;">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
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
                                            <input type="" name="" min="1" style="width: 40px; height: 24px">
                                            <i class="far fa-caret-square-up" style="color: red; font-size:20px"></i>
                                            <i class="far fa-caret-square-down" style="color: red; font-size:20px"></i>
                                            </div>
                                        </td>
                                        <td>25 000</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-left col-md-6">
                            <button class="btn btn-warning">In đơn</button>
                            <button class="btn btn-primary ">Lưu</button>
                            <button class="btn btn-danger btn-destroy">Hủy</button>
                        </div>
                        <div class="col-md-6 text-right" style="font-size: 15px">
                            <strong>Tổng tiền:</strong>
                            <lable id="totalBill" style="margin-right: -3px">100 VND</lable>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6">
                    <div class="block-title">
                        <strong>Sản phẩm</strong>
                    </div>
                    <div style="height: 500px;">
                        <ul class="" style="overflow-y: scroll; height: 100%; margin-left: -40px;" >
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span id="1" class="badge badge-primary badge-pill" onclick="addProduct(this)">Thêm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </body>
    </div>
    <style type="text/css">
        @media (min-width: 1200px) {
            .container {
            width: 100%;
        }
}
    </style>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="/js/sell.js"></script>
    </body>
</html>