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
});