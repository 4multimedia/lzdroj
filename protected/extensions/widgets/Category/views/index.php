<div class="panel panel-widget panel-yellow">
	<div class="panel-heading"><?=Yii::t('widgets','Produkty');?><span class="arrow"></span></div>
	<div class="panel-body">
		<ul class="category-tree">
		<?php
		
			for ($a = 0; $a < count($Categories); $a++)
			{
				echo "<li><a href=\"".$Categories[$a]->alias."\">".$Categories[$a]->name."</a></li>";
			}
		
		?>
		</ul>
	</div>
</div>
