<?php

	class StaysController extends Controller
	{
		public function actionSearch()
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/stays.view.css');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/stays.search.js');
			
			$Stays = Stays::model()->findAll();
		
			$this -> render ('search', array(
				'Stays'		=> $Stays
			));
		}
	}