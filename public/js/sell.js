
function addProduct(element){

	var id = $(element).attr("id");
	console.log(updateProductToCart(id)+"");

	if (updateProductToCart(id) == true) {

		$(element).children(".quantity").val(10);
		return true;
	}
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

function addCustomer(element){
	document.getElementById("inputIdCustomer").value = $(element).attr("customer-id-select");
	document.getElementById('nameCustomer').innerHTML= $(element).attr("customer-name-select");
}

function htmlAddProductCart(id,name,price){
	var html = 
	"<tr class='element-cart'>"+
	"<input class='id-product-cart' type='hidden' value='"+id+"'>"+
		"<td>"+"<i class='fa fa-window-close' style='color: red;' onclick='deleteProduct(this)'></i> "+name+"</td>"+
		"<td class='price'>"+price+"</td>"+
		"<td ><input class='form-control quantity' type='number' value='1' style='height: 25px;width: 50px' onchange='sumPrice(this)'></td>"+
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
function updateProductToCart(id){
    $('.element-cart').each(function() {
        var element = $(this);
        var idTemp = element.children('.id-product-cart').val();
        if(idTemp == id){
        	return true;
        	break;
        }
    });
}