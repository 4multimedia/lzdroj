<?php

	class ObjectsController extends Controller
	{
		public function actionSearch()
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.search.css');
			Yii::app()->clientScript->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false&amp;language=pl');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/gmap3.min.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/objects.js');
			
			$Objects = Objects::model()->findAll();
		
			$this -> render('search', array(
				'Objects'	=> $Objects
			));
		}
		
		public function actionView($alias)
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/gallery.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.view.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/jquery.datepick.css');
			
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.plugin.min.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.datepick.min.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.datepick-pl.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/calendar.js');
		
			$Object = Objects::model()->find("alias=:alias", array("alias" => $alias));
			$this -> render('view', array(
				'Object'	=> $Object
			));
		}
	}