$(document).ready(function()
{
	$(".open-configuration").click(function()
	{
		var id = $(this).attr("rel");
		var col = $(this).parent().attr("class").replace("row-", "");
		var product_id = $(this).parent().attr("rel").replace("product-", "");
		
		$.get("ajax/productParameters?product_id="+product_id+"&id="+id+"&col="+col, function(data)
		{
			$("#configuration").modal("show");
			$("#configuration .modal-content").html(data);
		});
		
		return false;
	});
	
	$(document).on("change", ".modal-body select", function()
	{
		var price = $("input[name='price_from']").val();
		price = parseInt(price);
		$(".modal-body select").each(function()
		{
			var params = $('option:selected', this).attr('rel');
			price = price + parseInt(params);
		});
		price = price.toFixed(2);
		price = price.replace(".", ",");
		$(".price_text").text(price);
	});
});