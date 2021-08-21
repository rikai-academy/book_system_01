$(function () {
	$("#sum").html(() => {
		var sum = 0;
		$(".unit-total").each((x,y) => sum+=parseInt($(y).html(),10));
		return sum;
	});

	$(".add-to-cart").click(function () { 
		var book_id = $("#book_id").val();
		$.ajaxSetup({
			headers: {
				"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
			}
		});
		$.ajax({
			type: "post",
			url: "cartItem",
			data: { book_id },
			success (res) {
				var message='<div class="flash alert-info"><p class="panel-body display-message">'
				+ res.message +'</p></div>';
				$(".navbar.navbar-default.navbar-custom").after(message);
			},
		});
	});


	$(".cart-item-input").change(function () { 
		var id = $(this).attr("cartitemid");
		var price = $(this).attr("cartprice");
		var quantity = $(this).val();
		var totalPrice = price * quantity;
		$(this).parent().next(".unit-total").html(totalPrice);
		var sum =0;
		$(".unit-total").each((x,y) => sum+=parseInt($(y).html(),10));
		$("#sum").html(sum);
		var data = {quantity};
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