<?php

	class Recommended extends CWidget
	{
		public function init()
		{
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/widgets.js');
		
			$this -> render ('recommended');
		}
	}