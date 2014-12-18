<?php

	class StaysController extends Controller
	{
		public function actionSearch()
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/stays.view.css');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/stays.search.js');
			
			$Criteria = new CDbCriteria;
			$Criteria -> alias = "stays";
			$Criteria -> select = "stays.id, name, alias, summary, price, capacity, features, date_from, date_to";
			$Criteria -> join = "JOIN `stays_dates` ON `stays_id` = `stays`.`id` AND date_from >= NOW()";
			$Criteria -> order = "date_from DESC";
			
			$Stays = Stays::model()->findAll($Criteria);
		
			$this -> render ('search', array(
				'Stays'		=> $Stays
			));
		}
		
		public function actionView($id, $alias)
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/gallery.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/stays.view.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.view.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/jquery.datepick.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.tabs.css');
			
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.plugin.min.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.datepick.min.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.datepick-pl.js');
			Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false&amp;language=pl');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/gmap3.min.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/calendar.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/objects.tabs.js');
		
			$Stay = Stays::model()->find("alias=:alias", array("alias" => $alias));
			$this -> render('view', array(
				'Stay'	=> $Stay
			));
		}
	}