$(function () {
	$(".cart-item-input").change(function () { 
		var id = $(this).attr("cartitemid");
		var price = $(this).attr("cartprice");
		var quantity = $(this).val();
		var totalPrice = price * quantity;
		var data = {id,quantity,total_price: totalPrice};
		$(this).parent().next(".unit-total").html(totalPrice);
		$.ajaxSetup({
			headers: {
				"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
			}
		});
		$.ajax({
			type: "put",
			url: "cartItem/" + id,
			data: data
		});
	});
})