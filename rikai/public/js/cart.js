$(function () {
    $("#sum").html(() => {
		var sum = 0;
		$(".unit-total").each((x,y) => sum+=parseInt($(y).html(),10));
		return sum;
	});

	$(".cart-item-input").change(function () { 
		var sum =0;
		$(".unit-total").each((x,y) => sum+=parseInt($(y).html(),10));
		$("#sum").html(sum);
		$.ajaxSetup({
			headers: {
				"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
			}
		});
		$.ajax({
			type: "put",
			url: "updateTotal/" + $("#sum").attr("cartid"),
			data: {
				total_price: sum
			}
		});
	});
})