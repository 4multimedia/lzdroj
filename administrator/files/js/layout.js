$(document).ready(function()
{
	$("#hover-sidebar").click(function()
	{
		var check = parseInt($(".sidebar").css('left'));
		if (check == 0)
		{
			$(".sidebar").animate({'left' : '-185px'});
			$(".content").animate({'margin-left' : '65px'});
			$(".header-bar").animate({'margin-left' : '50px'});
			$(".sidebar ul li a b").fadeOut(200);
			$(".sidebar ul li span.icon").animate({'left' : '188px'});
			$(".sidebar ul li i.fa-angle-right").fadeOut(200);
		}
		else
		{
			$(".sidebar").animate({'left' : '0'});
			$(".content").animate({'margin-left' : '250px'});
			$(".header-bar").animate({'margin-left' : '235px'});
			$(".sidebar ul li a b").fadeIn(700);
			$(".sidebar ul li span.icon").animate({'left' : '3px'});
			$(".sidebar ul li i.fa-angle-right").fadeIn(700);
		}
	});
	
	$(".sidebar ul li").mouseenter(function()
	{
		//$(this).find("ul").css({'left' : '235px', 'top' : '-51px'}).stop(true, false).show("slide", { direction: "left" }, 300);
		$(this).find("ul").show();
	})
	.mouseleave(function()
	{
		//$(this).find("ul").css({'left' : '235px', 'top' : '-51px'}).stop(true, false).hide("slide", { direction: "left" }, 200);
		$(this).find("ul").hide();
	});
});