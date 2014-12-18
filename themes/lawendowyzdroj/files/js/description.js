jQuery(document).ready(function()
{
	jQuery(".widget-description .left-description ul li a").click(function()
	{
		var item = jQuery(this).parent();
		var status = item.hasClass("active");
		if (status == false)
		{
			var name = jQuery(this).text();
			jQuery(".widget-description .right-description h4").text(name);
			
			var id = item.attr("id").replace("description_", "");
			jQuery(".widget-description .left-description ul li span.icon").html("&nbsp;");
			jQuery(".widget-description .left-description ul li").removeClass("active");
			item.find("span").html("<i class=\"fa fa-check\"></i>");
			item.addClass("active");
			
			jQuery(".widget-description .right-description .text").html("<div style=\"text-align:center\"><img src=\"/themes/lawendowyzdroj/files/img/load.gif\"></div>");
			jQuery.post("/ajax/getDescriptionItems", {id : id}, function(data) { jQuery(".widget-description .right-description .text").html(data); });
		}
	});
});