jQuery(document).ready(function()
{
	var images = $(".gallery-thumbs ul li").length;
	var max_no = parseInt(images) - 1;
	var visible = 5;

	function getPhoto(image)
	{
		jQuery(".gallery-thumbs ul li.active").removeClass("active");
	
		var thumb = image.attr("src");
		var medium = thumb.replace("_thumb", "_medium");
		var zoom = thumb.replace("_thumb", "_zoom");
		var no = image.parent().addClass("active").attr("id").replace("thumb_", "");
		
		jQuery(".gallery-thumbs ul li a").attr({'rel' : 'gallery[]'});
		image.parent().attr({'rel' : ''});
		
		if (no == 0)
		{
			jQuery(".gallery-left .btns .prev").addClass("disabled");
		}
		else
		{
			jQuery(".gallery-left .btns .prev").removeClass("disabled");
		}
		if (no == max_no)
		{
			jQuery(".gallery-left .btns .next").addClass("disabled");
		}
		else
		{
			jQuery(".gallery-left .btns .next").removeClass("disabled");
		}
		
		var position = (79 * (parseInt(no) - 5)) * -1;
		if (position < 79)
		{
			$(".gallery-thumbs ul").animate({'left' : position+'px'});
		}
		
		$(".gallery-left .btns .zoom").attr({'href' : zoom});
		$(".gallery-inner img").attr({'src' : medium});
		$(".count span").text((parseInt(no)+1));
	}

	jQuery(document).on("click", ".gallery-thumbs ul li img", function()
	{
		getPhoto(jQuery(this));
	});
	
	jQuery(document).on("click", ".gallery-thumbs ul li a", function()
	{
		return false;
	});
	
	jQuery(document).on("click", ".gallery-left .btns .prev, .gallery-left .btns .next", function()
	{
		var direction = "next"
		if (jQuery(this).hasClass("prev") == true)
		{
			direction = "prev";
		}
		
		if (direction == "next")
		{
			var image = jQuery(".gallery-thumbs ul li.active").next("li").find("img");
		}
		else if (direction == "prev")
		{
			var image = jQuery(".gallery-thumbs ul li.active").prev("li").find("img");
		}
		
		if (image.length == 1)
		{
			getPhoto(image);
		}
	});
	
	jQuery(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 73,
				height	: 49
			}
		}
	});
});