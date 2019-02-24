
function addProduct(element){

	$("#tbody-cart").append("<tr class='tr-product'><td><span style='color: red'onclick='deleteProduct(this)''><i class='fas fa-window-close'></i></span><span>bánh</span></td><td>5 000</td><td><div class='form-group' style='width: 90px'><input type='number' class='form-control' name='' min='1' style='width: 60px; height: 24px'></div></td><td>25 000</td></tr>");
}
function deleteProduct(element){
	$(element).parent().parent().remove();
}
function addCustomer(element){
	document.getElementById("inputIdCustomer").value = $(element).attr("customer-id-select");
	document.getElementById('nameCustomer').innerHTML=$(element).attr("customer-name-select");
	
}