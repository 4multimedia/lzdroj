jQuery(document).ready(function()
{
	jQuery(".see-modal-maps").click(function()
	{
		var doc_height = jQuery(document).height();
		var win_height = jQuery(window).height();
		var width = jQuery(document).width();
		
		jQuery("body").append("<div class=\"box-opacity\"></div>");
		jQuery(".box-opacity").css({
			'width' : width+'px',
			'height' : doc_height+'px',
			'opacity' : 0
		}).animate({'opacity' : .4}, 400, function()
		{
			jQuery("body").append("<div class=\"box-maps\"><div class=\"box-maps-google\"></div></div>");
			jQuery(".box-maps").css({
				'width' : (width - 60)+'px',
				'height' : (win_height - 60)+'px',	
			})
			jQuery(".box-maps-google").css({'height' : (win_height - 80) }).gmap3({
			 map: {
			    options: {
			      zoom: 12
			    }  
			 },
			 marker:{
			    address: "Zakopane",
			 }
			},
			"autofit" );
		});
	});
});