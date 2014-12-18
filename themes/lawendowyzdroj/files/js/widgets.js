jQuery(document).ready(function()
{
	jQuery("ul.tab li a").click(function()
	{
		jQuery(this).parent().parent().find(".active").removeClass("active");
		jQuery(this).parent().addClass("active");
	});
});