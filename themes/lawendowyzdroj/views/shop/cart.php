<?php if ($Items) { ?>
	<h4>Twój koszyk</h4>
	<div class="page-box">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>Produkt</td>
					<td>Parametry</td>
					<td>Cena netto</td>
					<td>Ilość</td>
					<td>Wartość netto</td>
					<td>Wartość VAT</td>
					<td>Wartość brutto</td>
				</tr>
			</thead>
			<tbody>
				<?php
					for($i = 0; $i < count($Items); $i++)
					{
					
						$paremeters = json_decode($Items[$i]->parameters, true);
						$price_unit = $Items[$i]->price_total;
						$quantity = $Items[$i]->quantity;
						
						$price = $price_unit * $quantity;
						$tax = $price * 0.23;
						$total = $price + $tax;
				?>
				<tr>
					<td><?=$product_id;?></td>
					<td>
						<ul>
						<?php foreach($paremeters as $label => $options) { ?>
							<li><b><?=$label;?></b> <?=$options["option"];?> <?php if ($options["price"]) { ?><span><?=$options["price"];?></span><?php } ?></li>
						<?php } ?>
						</ul>
					</td>
					<td><?=$Items[$i]->price_total;?></td>
					<td><input type="text" name="" value="<?=$quantity;?>">
					<td><?=$price;?></td>
					<td><?=$tax;?></td>
					<td><?=$total;?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php } else { ?>
<div class="alert alert-danger">Twój koszyk jest pusty</div>
<?php } ?>