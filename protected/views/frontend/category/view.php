<div class="row">
<?php

	$no = 1;
	foreach ($items as $key => $item)
	{
		if ($key == "nb_results")
		{
			$count = $item;
		}
		else
		{
			echo '
			<div class="item-thumb col-md-3 col-xs-6 col-sm-4">
				<div class="image item-magnification"><a href="/'.$item["link"].'"><img src="'.str_replace("110_", "160_", $item["thumbnail_url"]).'" alt="" title=""></a></div>
				<span>#'.$item["id"].'</span>
				<p>'.$item["title"].'</p>
				<a href="/'.$item["link"].'" class="config">Skonfiguruj i kup <i class="fa fa-cog"></i></a>
			</div>
			';
			
			$no++;
		}
	}
	$no++;

?>
</div>