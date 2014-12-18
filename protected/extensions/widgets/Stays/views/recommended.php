<script type="text/javascript">

	jQuery(document).ready(function()
	{
		var items = jQuery(".box-recommended li").length;
		var width = 206;
		var s = 0;
		
		var size = items * width;
		
		jQuery(".box-recommended .box-recommended-curtain ul").css({'width' : size+'px'});
		
		var n = "";
		for(var a = 1; a <= items; a++)
		{
			n += '<span '+(a == 1 ? 'class="active"' : '')+'>'+a+'</span>';
		}
		
		jQuery(".box-recommended .navig").html(n);
		
		function slide(i)
		{
			if (i > items) { i = 1; }
			
			jQuery(".box-recommended .navig span").removeClass("active");
			jQuery(".box-recommended .navig span:contains('"+i+"')").addClass("active");
		
			var p = ((i-1) * width) * -1;
			jQuery(".box-recommended .box-recommended-curtain ul").animate({"left" : p+"px"}, 400);
			
			var t = jQuery("#recommended_"+i).find("img").attr("title");
			jQuery(".box-recommended p").fadeOut(200, function()
			{
				jQuery(".box-recommended p").text(t).fadeIn();
			});
			s = 0;
		}
		
		jQuery(document).on("click", ".box-recommended .navig span", function()
		{
			var i = jQuery(this).text();
			slide(i);
		});
		

		function countdownSlide()
		{
			s++;
			if (s == 7)
			{
				var i = jQuery(".box-recommended .navig span.active").text();
				i++;
				slide(i);
			}
			setTimeout(function() { countdownSlide(); },1000);
		}
		
		countdownSlide();
	});

</script>
<div class="box-down box-module box-recommended">
	<div class="box-border">
		<h3>Rekomendowane zabiegi</h3>
		<div class="box-recommended-curtain">
			<ul>
				<li id="recommended_1">
					<div class="thumb">
						<a href="#"><img src="/files/img/tmp/tmp_zabieg.jpg" style="width:198px; height:87px;" title="Kąpiele siarkowe"></a>
					</div>
				</li>
				<li id="recommended_2">
					<div class="thumb">
						<a href="#"><img src="/files/img/tmp/tmp_zabieg_2.jpg" style="width:198px; height:87px;" title="Masaż  klasyczny częściowy"></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="float-title">
			<p>Kąpiele siarkowe</p>
			<div class="navig">
			
			</div>
		</div>
	</div>
</div>