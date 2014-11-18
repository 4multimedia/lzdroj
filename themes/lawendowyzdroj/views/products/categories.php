<div class="row row-categories">

	<?php for ($c = 0; $c < count($Subcategories); $c++) { ?>
	<div class="col-md-3">
		<div class="category-item">
			<a href="/<?=$Subcategories[$c]->alias;?>">
			<div class="box">
				<p><?=$Subcategories[$c]->name;?></p>
				<div class="price">
					<span>Ceny już od</span>
					<b>319,02 zł</b>
				</div>
			</div>
			</a>
		</div>
	</div>
	<?php }?>

</div>