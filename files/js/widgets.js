$(document).ready(function()
{
	$("div#widget-language-select span").click(function()
	{
		$(this).addClass("active");
		$("div#widget-language-select ul").slideDown();
	});
});