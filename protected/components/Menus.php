<?php

	class Menus
	{
		public function render($parent_id, $params = array())
		{
			$Branches = Menu::model()->findAll("parent_id=:parent_id", array("parent_id" => $parent_id));
			$CountBranches = count($Branches);
			
			$class = $params["class"];
			
			if ($CountBranches > 0)
			{
				$html .= "<ul".($class != "" ? " class=\"$class\"" : "").">";
				
				for($m = 0; $m < $CountBranches; $m++)
				{
					$params = $Branches[$m] -> params;
					if ($params)
					{
						$params = json_decode($params, true);
					}
				
					$alias = LanguagesData::model()->findData($Branches[$m] -> id, "menu", "1", "alias");
					$name = LanguagesData::model()->findData($Branches[$m] -> id, "menu", "1", "name");
				
					$html .= "<li><a href=\"$alias\"".($params["class"] != "" ? " class=\"".$params["class"]."\"" : "").">$name</a></li>";
				}
				
				$html .= "</ul>";
				return $html;
			}
			else
			{
				return false;
			}
		}
	}