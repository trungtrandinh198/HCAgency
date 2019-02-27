
function addProduct(element){

	var id = $(element).attr("id");
	var name = $(element).children(".spanNameProduct").text();
	var price = $(element).children(".spanPriceProduct").text();
	var quantity = 1;
	var sum = quantity*parseInt(price);

	$("#tbody-cart").append(htmlAddProductCart(name,sum));
	totalBill();
}
function deleteProduct(element){
	$(element).parent().parent().remove();
}

function addCustomer(element){
	document.getElementById("inputIdCustomer").value = $(element).attr("customer-id-select");
	document.getElementById('nameCustomer').innerHTML= $(element).attr("customer-name-select");
}

function htmlAddProductCart(name,price){
	var html = 
	"<tr>"+
	"<input class='id-product-cart' type='hidden' value='1'>"+
		"<td>"+name+"</td>"+
		"<td>"+price+"</td>"+
		"<td ><input class='form-control quantity' type='number' value='1' style='height: 25px;width: 50px'></td>"+
		"<td class='number cl-total-price'>"+price+"</td>"+
	"</tr>";
	return html;
}
function totalBill(){

	var sum = 0;
    $('.cl-total-price').each(function() {
    	console.log($("cl-total-price").closest('tr').find('.quantity').val())
        var price = $(this);
        var q = 1;
        sum += parseInt(price.text()) * parseInt(q);
    });

    $('#total-bill').html(sum);

}