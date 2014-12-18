jQuery(document).ready(function()
{
	jQuery(".stays .stays-right ul li").click(function()
	{
		var $tab = jQuery(this).find("a").attr("rel");
		var $area = jQuery(this).parent().parent();
		$area.find("li.active").removeClass("active");
		jQuery(this).addClass("active");
		$area.find(".tab-content").hide();
		$area.find("."+$tab).show();
	});
	
	jQuery(".terms-pagination a").click(function()
	{
		var page = jQuery(this).text();
		var offset = page - 1;
		var id = jQuery(this).closest(".stays").attr("rel").replace("stay-", "");
		jQuery.post("/ajax/getTerms", {id : id, offset : offset}, function(data) { $(".terms-load").html(data); });
		return false;
	});
});