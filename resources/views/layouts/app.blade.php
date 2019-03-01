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
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- js -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="">Đại lý Hùng Chính</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      
      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="color: white">
        Xin chào : {{ Auth::user()->name }}
      </div>
    </nav>

    <div id="wrapper">
        <!-- menu -->
      <ul class="sidebar navbar-nav">
         <!-- chuyển đến trang chủ -->
        <li class="nav-item active">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- chuyển đên trang chủ -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::route('category.index') }}">
            <i class="fas fa-book-open"></i>
            <span>Danh mục</span></a>
        </li>
        <!-- chuyển đên hàng hóa -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::route('product.index') }}">
            <i class="fas fa-shopping-cart"></i>
            <span>Hàng hóa</span>
          </a>
        </li>
        <!-- chuyển đên khách hàng -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::route('customer.index') }}">
            <i class="fas fa-users"></i>
            <span>Khách hàng</span></a>
        </li>
        <!-- chuyển đên hóa đơn -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::route('order.index') }}">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Hóa đơn</span></a>
        </li>
        @if(Auth::user()->username == "admin")
        <li class="nav-item active">
          <a class="nav-link" href="/register">
            <i class="fas fa-user-cog"></i>
            <span>Quản lý user</span></a>
        </li>
        @endif
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::route('sell.index') }}">
            <i class="fas fa-laptop"></i>
            <span>Bán hàng</span></a>
        </li>
        <!-- đăng xuất làm tạm -->
        <li class="nav-item active">
            <a class="nav-link" href="#" 
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>{{ __('Đăng xuất') }} </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </li>
        
        <!-- 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Hàng hóa</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="login.html">Danh sách</a>
            <a class="dropdown-item" href="register.html">thêm mới</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          </div>
        </li> -->
      </ul>
      
      <!-- hết menu -->

      <!-- Nội dung -->
      <div id="content-wrapper">

        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © TrungTran {{date("Y")}}</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- Kết thúc nội dung -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <script src="js/numeral.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
