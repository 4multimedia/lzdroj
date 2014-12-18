<?php 

	class Category extends CWidget
	{
		public $title;
	
		public function init()
		{
			$cs = Yii::app()->getClientScript();
			$cs -> registerCssFile($baseUrl.'/files/css/widgets.css');
		}
		
    	public function run()
    	{
    		$Categories = Products::model() -> getRoot();
			$this->render('index', array(
				'Categories' => $Categories,
			));
    	}
	}
?>