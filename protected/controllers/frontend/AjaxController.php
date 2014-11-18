<?php

	class AjaxController extends Controller
	{
		public function actionProductParameters()
		{
			$CirculationID = $_GET["id"];
			$ColID = $_GET["col"];
			$ProductID = $_GET["product_id"];
			
			$Circulation = ProductsCirculation::model() -> find("id=:id", array("id" => $CirculationID));
			$Data = json_decode($Circulation -> prices, true);
			$Parameters = $Data[$ColID]["parameters"];
			
			$Title = LanguagesData::model()->findData($ProductID, "products", "1", "name");
			
			$code = array(
				"u00f3" => "ó",
				"u0105" => "ą",
				"u015b" => "ś",
				"u0107" => "ć",
				"u0142" => "ł",
			);
		
		echo '
		<form action="/koszyk/dodaj" method="post">
		<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">'.$Title.' '.$Circulation->circulation.'szt.</h4>
			</div>
			<div class="modal-body">';
			if ($Parameters)
			{
				foreach ($Parameters as $label => $options)
				{
					$label = strtr($label, $code);
					echo '
					<div class="option">
						<label>'.$label.':</label>
						<select name="parameters[]">';
							foreach ($options as $option_id => $option)
							{
								echo '<option value="'.$label.'#'.strtr($option["name"], $code).'#'.$option["price"].'" rel="'.$option["price"].'">'.strtr($option["name"], $code).' '.($option["price"] != 0 ? '(+'.number_format($option["price"],2,",",".").' zł)' : '').'</option>';
							}
						echo '</select>
					</div>';
				}
			}

		echo '</div>
			<div class="modal-footer">
				<input type="hidden" name="product_id" value="'.$ProductID.'">
				<input type="hidden" name="circulation_id" value="'.$CirculationID.'">
				<input type="hidden" name="col_id" value="'.$ColID.'">
				<input type="hidden" name="price_from" value="'.$Data[$ColID]["price"].'">
				Razem: <span class="price_text">'.number_format($Data[$ColID]["price"],2,",",".").'</span> zł
				<button type="submit" class="btn btn-primary">Dodaj do koszyka</button>
			</div>
		</form>';
			
		}
	}
?>