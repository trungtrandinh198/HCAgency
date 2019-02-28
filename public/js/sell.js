
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
	totalBill();
}
function deleteProduct(element){
	$(element).parent().parent().remove();
	totalBill();
}



function htmlAddProductCart(id,name,price){
	var html = 
	"<tr class='element-cart'>"+
	"<input class='id-product-cart' type='hidden' name='product_id' value='"+id+"'>"+
		"<td>"+"<i class='fa fa-window-close' style='color: red;' onclick='deleteProduct(this)'></i> "+name+"</td>"+
		"<td class='price'>"+price+"</td>"+
		"<td ><input class='form-control quantity' name='quantity' type='number' value='1' style='height: 25px;width: 50px' onchange='sumPrice(this)'></td>"+
		"<td class='number cl-total-price'>"+price+"</td>"+
	"</tr>";
	return html;
}

function sumPrice(element){
	var quantity = $(element).val();
	var price = $(element).closest('tr').find('.price').text();
	$(element).closest('tr').find('.cl-total-price').html(parseInt(quantity) * parseInt(price));
	totalBill();
}

function totalBill(){
	var sum = 0;
    $('.cl-total-price').each(function() {
        var element = $(this);
        var price = $(element).closest('tr').find('.price').text();
        var quantity = element.closest('tr').find('.quantity').val();
        sum += parseInt(price) * parseInt(quantity);
    });
    $('#total-bill').html(sum);

}

function addCustomer(element){
	document.getElementById("inputIdCustomer").value = $(element).attr("customer-id-select");
	document.getElementById('nameCustomer').innerHTML= $(element).attr("customer-name-select");
}

function saveBill(){
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
        	console.log(success);
        }
    });
   
}