<?php

	if ($Photos)
	{
		for ($p = 0; $p <= count($Photos); $p++)
		{
			$ImagePath = $Photos[$p]->path;
			$ImageExt = end(explode(".", $ImagePath));
			$ImageClearPath = substr($ImagePath, 0, strrpos($ImagePath, "."));
			
			// generowanie medium
			$ImageMediumPath = $ImageClearPath."_medium.".$ImageExt;
			$ImageThumbPath = $ImageClearPath."_thumb.".$ImageExt;
			$ImageZoomPath = $ImageClearPath."_zoom.".$ImageExt;
			if (file_exists($ImagePath))
			{
				if (!file_exists($ImageMediumPath))
				{
					$Image = Yii::app()->phpThumb->create($ImagePath);
					$Image -> adaptiveResize(728,486);
					$Image -> save($ImageMediumPath);
				}
				$Medium[] = $ImageMediumPath;
				
				if (!file_exists($ImageThumbPath))
				{
					$Image = Yii::app()->phpThumb->create($ImagePath);
					$Image -> adaptiveResize(73,49);
					$Image -> save($ImageThumbPath);
				}
				$Thumbs[] = $ImageThumbPath;
				
				if (!file_exists($ImageZoomPath))
				{
					$Image = Yii::app()->phpThumb->create($ImagePath);
					$Image -> resize(1000,1000);
					$Image -> save($ImageZoomPath);
				}
				$Zoom[] = $ImageZoomPath;
			}
		}
	}
			
?>



	<div class="gallery-left">
		<div class="content-tab">
			<div class="gallery-inner">
				<img src="<?=$Medium[0];?>">
				<div class="gallery-border">
				</div>
			</div>
			<div class="gallery-nav">
				<div class="gallery-thumbs">
					<ul>
						<?php
						
							if ($Photos)
							{
								foreach ($Thumbs as $GenKeyID => $Path)
								{
									echo '<li class="'.($GenKeyID == 0 ? "active" : "").'" id="thumb_'.$GenKeyID.'"><img src="'.$Path.'"> <a class="fancybox" rel="gallery[]" href="'.$Zoom[$GenKeyID].'" rel="gallery[]"></a></li>';
								}
							}
						
						?>
					</ul>
				</div>
				<div class="btns">
					<a href="javascript:;" class="prev disabled"><i class="fa fa-chevron-left"></i></a>
					<a href="javascript:;" class="next"><i class="fa fa-chevron-right"></i></a>
					<a href="<?=$Zoom[0];?>" class="zoom fancybox" rel="gallery[]"><i class="fa fa-search-plus"></i></a>
				</div>
				<div class="count"><span>1</span>/<?=count($Photos);?></div>
			</div>
		</div>
		<div class="gallery-options">
			<ul>
				<li><a href="javascript:;" id="gallery">Zdjęcia</a></li>
				<li><a href="javascript:;" class="disabled">Spacer 360&deg;</a></li>
				<li><a href="javascript:;" class="disabled">Video</a></li>
				<li><a href="javascript:;" class="disabled" id="map">Mapa</a></li>
				<li><a href="javascript:;" class="disabled">Okolica</a></li>
				<li><a href="javascript:;" class="disabled">Dostępność</a></li>
				<li><a href="javascript:;" class="disabled">Plan pokoju</a></li>
			</ul>
		</div>
	</div>