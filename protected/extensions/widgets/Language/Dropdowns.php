<?php 

	class Dropdowns extends CWidget
	{
		public $selected;
		public $config;
		
		public function init()
		{
			$cs = Yii::app()->getClientScript();
			$cs -> registerCssFile(Yii::app()->request->baseUrl.'/files/css/widgets.css');
		}
		
		public function languagesArray()
		{
			$lang["pl"] = "Język polski";
			$lang["en"] = "English";
			$lang["de"] = "Deutsch";
			
			return $lang;
		}
		
		public function run()
    	{
    		$Selected = Yii::app()->language;
    		$Arrays = $this -> languagesArray();
			$this -> render('dropdowns', array(
				'Selected' => $Selected,
				'Arrays' => $Arrays
			));
    	}
	}