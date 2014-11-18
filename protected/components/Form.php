<?php

	class Form extends CHtml
	{
		public function dropdownSubmit($component)
		{
			$action = Yii::app() -> session[$component]["redirect"];
			if (!$action) { $action = "list"; }
		
			$option = array(
				'list' => 'Zapisz i wróć do listy',
				'edit' => 'Zapisz i wróć do edycji',
				'new' => 'Zapisz i dodaj nowy'
			);
		
			$output = '
			<input type="hidden" name="redirect" value="'.$action.'">
			<div class="btn-group btn-dropdown-submit dropup">
				<button class="btn btn-success" type="submit">'.$option[$action].'</button>
				<button class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="javascript:;" id="type-list">Zapisz i wróć do listy</a></li>
					<li><a href="javascript:;" id="type-edit">Zapisz i wróć do edycji</a></li>
					<li><a href="javascript:;" id="type-new">Zapisz i dodaj nowy</a></li>
				</ul>
			</div>';
			
			return $output;
		}
		
		public function redirect($component, $action = "list", $navigation, $id = null)
		{
			if (!$action) { $action = "list"; }
			$navigation["edit"] = $navigation["edit"]."/".$id;
			$_SESSION[$component]["redirect"] = $action;
			$this -> redirect($navigation[$action]);
		}
	}