
function check(element){
	var id = $(element).attr("id");
	var check =0;
	$('.element-cart').each(function() {
        var element_cart = $(this);
        var idTemp = element_cart.children('.id-product-cart').val();
        if(idTemp == id){
        	element_cart.children('td').children('.quantity').val(parseInt(element_cart.children('td').children('.quantity').val())+1);
        	sumPrice ( element_cart.children('td').children('.quantity'));
        	check = 1;
        }
    });
	if (check == 0) {
		addProduct(element);
	}
}

function addProduct(element){

	var id = $(element).attr("id");
	var name = $(element).children(".spanNameProduct").text();
	var price = $(element).children(".spanPriceProduct").text();
	var quantity = 1;
	var sum = quantity*parseInt(price);

	$("#tbody-cart").append(htmlAddProductCart(id,name,sum));
	totalOrder();
}
function deleteProduct(element){
	$(element).parent().parent().remove();
	totalOrder();
}



function htmlAddProductCart(id,name,price){
	var html = 
	"<tr class='element-cart'>"+
	"<input class='id-product-cart' type='hidden' name='product_id' value='"+id+"'>"+
		"<td>"+"<i class='fa fa-window-close' style='color: red;' onclick='deleteProduct(this)'></i> "+name+"</td>"+
		"<td class='price number'>"+price+"</td>"+
		"<td ><input class='form-control quantity number' name='quantity' type='number' value='1' style='height: 25px;width: 50px' onchange='sumPrice(this)'></td>"+
		"<td class='number cl-total-price'>"+price+"</td>"+
	"</tr>";
	return html;
}

function sumPrice(element){
	var quantity = $(element).val();
	var price = $(element).closest('tr').find('.price').text();
	$(element).closest('tr').find('.cl-total-price').html(parseInt(quantity) * parseInt(price));
	totalOrder();
}

function totalOrder(){
	var sum = 0;
    $('.cl-total-price').each(function() {
        var element = $(this);
        var price = $(element).closest('tr').find('.price').text();
        var quantity = element.closest('tr').find('.quantity').val();
        sum += parseInt(price) * parseInt(quantity);
    });
    $('#total-Order').html(sum);

}

function addCustomer(element){
	document.getElementById("inputIdCustomer").value = $(element).attr("customer-id-select");
	document.getElementById('nameCustomer').innerHTML= $(element).attr("customer-name-select");
	document.getElementById("addressCustomer").value = $(element).attr("customer-address-select");
	document.getElementById("phoneCustomer").value = $(element).attr("customer-phone-select");
}

function saveOrder(){
	var data = [];
	var idCustomer = $('#inputIdCustomer').val() ;
	$('.element-cart').each(function(index,element) {
		item = {};
      	id =  $(element).find('input[name=product_id]').val();
      	quantity =  $(element).find('input[name=quantity]').val();
      	item[id] = quantity;
      	data.push(item);
    
    
       
    });
    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	}
	});
    $.ajax({
        type: 'POST',
        url: "sell/save",
        data:{"data":data,"idCustomer": idCustomer} ,
        cache: false,
        async: false,
        success: function (success) {
        	location.reload();
        }
    });
   
}
function printDiv() {
        var dataTable=document.getElementById("table-cart");
        var totalOrder=$("#total-Order").text();
        var nameCustomer=$("#nameCustomer").text();
        var addressCustomer=$("#addressCustomer").val();
        var phoneCustomer=$("#phoneCustomer").val();
        var d = new Date();
        var time= "Ngày "+d.getDate()+" Tháng "+d.getMonth()+" năm "+d.getFullYear();
		printWindows= window.open("");
		printWindows.document.write("<div style ='text-align:center;width:300px'>");
		printWindows.document.write("<div style='font-size:28px;'>Hóa Đơn Bán Hàng</div>");
		printWindows.document.write("<div style='font-size:22px;'>Đại Lý Hùng Chính</div>");
		printWindows.document.write("<div style=''>Điện thoại: 0000000000</div><br>");
		printWindows.document.write("</div>");
		printWindows.document.write("<div>Người mua:"+nameCustomer+"</div>");
		printWindows.document.write("<div>Địa chỉ: "+addressCustomer+"</div>");
		printWindows.document.write("<div>Số điện thoại: "+phoneCustomer+"</div>");
		printWindows.document.write(dataTable.outerHTML);
		printWindows.document.write("<div style='align:rigth'>Tổng tiền: "+totalOrder+"</div>");
		printWindows.document.write("<div style='margin-left:133px'>"+time+"</div>");
		printWindows.document.write("<div style='margin-left:150px;'>Khách ký thanh toán</div><br>");
		
		printWindows.document.write("<style>");
		printWindows.document.write("input {background-color: transparent; border: 0px solid;}");
		printWindows.document.write("tr {border: 1px solid #ddd;}");
		printWindows.document.write(".number {text-align: right;}");
		printWindows.document.write("</style>");
		printWindows.print();
   		printWindows.close();

   }