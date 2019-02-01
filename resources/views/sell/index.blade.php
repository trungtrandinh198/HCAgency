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
        <link href="css/sb-admin.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="row" style="min-height: 700px">
                <div class="block col-lg-6">
                    <strong>Đơn hàng</strong>
                    <div  style="height: 700px;overflow-y: scroll;">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>bánh</td>
                                        <td>5 000</td>
                                        <td>5</td>
                                        <td>25 000</td>
                                        <td></td>
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
                <div class="block col-lg-6">
                    <div class="block-title">
                        <strong>Sản phẩm</strong>
                    </div>
                    <div style="height: 400px">
                        <ul class="" style="overflow-y: scroll; height: 700px">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li>
<li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li><li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Thèo lèo</span>
                                <span>5,000 vnd</span>
                                <span class="badge badge-primary badge-pill">Thêm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </body>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
</html>