<div class="btn-group languages-dropdowns">
	<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><img src="<?=Yii::app()->request->baseUrl;?>/files/img/<?=$Selected;?>.png"> <?=$Arrays[$Selected];?> <span class="caret"></span></button>
	<ul class="dropdown-menu pull-right" role="menu">
		<?php foreach ($Arrays as $Lang => $Name) { ?>
		<li><a href="<?=Yii::app()->request->url;?>?lang=<?=$Lang;?>"><img src="<?=Yii::app()->request->baseUrl;?>/files/img/<?=$Lang;?>.png"><?=$Name;?></a></li>
		<?php } ?>
	</ul>
</div>