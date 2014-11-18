<?php

	class Languages
	{
		public function languagesArray()
		{
			$lang["pl"] = "Język polski";
			$lang["en"] = "English";
			$lang["de"] = "Deutsch";
			
			return $lang;
		}
		
		public function languageActive()
		{
			$Selected = Yii::app()->language;
    		$Arrays = Languages::languagesArray();
    		
    		return $Arrays[$Selected];
		}
	}