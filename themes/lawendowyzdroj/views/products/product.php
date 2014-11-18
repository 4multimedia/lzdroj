<div class="product-descript">
	<div class="row">
		<div class="col-md-4">
			<div class="image"><img src="<?=$Product->image;?>" class="img-responsive"></div>
		</div>
		<div class="col-md-8">
			<?php if ($Description) { ?>
			<ul class="product-descript-list">
				<?php $i = 0; foreach($Description as $key => $descript) { ?>
				<li<?php if ($i % 2) { ?> class="odd"<?php } ?>>
					<p><?=$descript["name"];?></p>
					<span><?=$descript["descript"];?></span>
				</li>
				<?php $i++; } ?>
			</ul>
			<?php } ?>
		</div>
	</div>
	<div class="pricelist">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td style="width:120px;"><b>Nakład</b></td>
					<?php if ($Headers) { ?>
						<?php foreach ($Headers as $header_key => $header) { ?>
						<td class="header-<?=$header_key;?>"><b><?=$header["name"];?></b><?=$header["subname"];?></td>
						<?php } ?>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php for($c = 0; $c < count($Circulation); $c++) { ?>
				<?php
				
					$prices = json_decode($Circulation[$c]->prices, true);
					
				?>
				<tr>
					<td class="circulation" style="width:120px;"><?=$Circulation[$c]->circulation;?></td>
					<?php foreach ($Headers as $header_key => $header) { ?>
						<td class="row-<?=$header_key;?>" rel="product-<?=$Circulation[$c]->product_id;?>"><a href="/parametry-produktu/<?=$alias;?>/<?=$Circulation[$c]->id;?>" rel="<?=$Circulation[$c]->id;?>" class="open-configuration"><?=number_format($prices[$header_key]["price"],2,",",".");?> zł</a> cena za sztukę: <?=number_format(($prices[$header_key]["price"]/$Circulation[$c]->circulation),2,",",".");?> zł</td>
					<?php } ?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="configuration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
		</div>
	</div>
</div>