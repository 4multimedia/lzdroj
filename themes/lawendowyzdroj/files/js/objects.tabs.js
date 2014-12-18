jQuery(document).ready(function()
{
	var load_gallery_html = jQuery(".content-tab").html();

	jQuery(".gallery-options a").click(function()
	{
		var html = "";
		var tab = jQuery(this).attr("id");
		
		if (tab == "gallery")
		{
			html += load_gallery_html;
			jQuery(".content-tab").html(html);
		}
		
		if (tab == "map")
		{
			html += "<div class=\"gallery-map\"></div>";
			jQuery(".content-tab").html(html);
			jQuery(".gallery-map").gmap3({
				map: {
				address:"Zakopane",
			    options: {
			      zoom: 16
			    }  
			 },
			 marker:{
				 address: "Zakopane",
			 }
			});
		}
		
		if (html)
		{
			jQuery(".gallery-options a").addClass("disabled");
			jQuery(this).removeClass("disabled");
		}
	})
});