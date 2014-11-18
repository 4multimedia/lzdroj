<?php 

	class Select extends CWidget
	{
		public $selected;
		public $config;
		
		public function init()
		{
			$this -> config = Yii::app() -> config -> group('languages');
			$cs = Yii::app()->getClientScript();
			$cs -> registerCssFile($baseUrl.'/files/css/widgets.css');
			$cs -> registerScriptFile($baseUrl.'/files/js/widgets.js', CClientScript::POS_END);
		}
		
		public function run()
    	{
    		$default = $this -> config -> language_default;
    		$visible = $this -> config -> language_visible;
    		$array = $this -> config -> languages_array;
    		$available = $this -> config -> languages_available;
    		
    		if ($visible == 1)
    		{
    			$this -> render('select', array(
    				'default' => $default,
    				'array' => $array,
    				'available' => $available
    			));
    		}
    	}
	}