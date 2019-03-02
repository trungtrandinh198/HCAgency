<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
  <link href="{{ asset('css/printbill.css') }}" rel="stylesheet">
</head>
<body>

  <div id="bill-form">
    
    <div id="header">
      <div id="title">Đại lý HÙNG CHÍNH</div>
      <div id="address">336 Hùng Vương - TP.Đà Nẵng -ĐT:0511.3750607 * DĐ:0344 678 772</div>
      <div id="info">Chuyên bán sỉ</div>
      <div class="detail">- Bánh đậu xanh, Bánh dừa nướng, Khô mè, Mè sững</div>
      <div class="detail">- Kẹo thẻ, kẹo dâu, Kẹo mè, Bắp, Nui, Me, Cốm</div>
      <div class="detail">- Đậu phụng, Tai mè, Thèo lèo, Chuối sấy</div>
      <div class="detail">- Bánh thánh, Bánh men,...</div>
      <div id="billname">HÓA ĐƠN BÁN HÀNG</div>
      <div class="divInfor">
        <div class="infor1">Khách hàng: {{$order->customer->name}}</div>
        <div class="infor2">SĐT: {{$order->customer->phone_number}}</div>
      </div>
      <div class="divInfor">
        <div class="infor1">Địa chỉ: {{$order->customer->address}}</div>
        <div class="infor2">Ngày giao: {{date_format($order -> created_at,"d/m/Y")}}</div>
      </div>
    </div>
    <div id="body">
      <table>
        <tr>
          <th>STT</th>
          <th>TÊN HÀNG</th>
          <th>Đơn giá</th>
          <th>SL</th>
          <th>Thành tiền</th>
        </tr>
        @foreach($orderDetails as $index => $orderDetail)
        <tr>
          <td style="text-align: center;">{{$index+1}}</td>
          <td>{{$orderDetail->product->name}}</td>
          <td class="number">{{number_format($orderDetail->price)}}</td>
          <td class="number" style="text-align: center;">{{number_format($orderDetail->quantity)}}</td>
          <td class="number">{{number_format($orderDetail->price * $orderDetail->quantity)}}</td>
        </tr>
        @endforeach
        <tr>
          <th></th>
          <th>Tổng cộng: </th>
          <th></th>
          <th></th>
          <th class="number">{{number_format($order->total_price)}}</th>
        </tr>
        
      </table>
    </div>
    <div id="footer" style="margin-top: 10px;">
      <div style="text-align: center; width: 230px;">
        <div>Ngày 11 tháng 11 năm 2011</div>
      <div>Chủ hiệu</div>
      </div>
      
    </div>
  </div>

</body>
</html>
<script type="text/javascript">
  window.print();
  window.focus();
  setTimeout(function(){ window.close(); }, 1000);
</script>
