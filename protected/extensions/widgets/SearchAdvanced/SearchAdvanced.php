<?php 

	class SearchAdvanced extends CWidget
	{
		public $title;
	
		public function init()
		{
			$cs = Yii::app()->getClientScript();
			$cs -> registerCssFile($baseUrl.'/files/css/widgets.css');
		}
		
    	public function run()
    	{
        	$this->render('index');
    	}
	}
?>