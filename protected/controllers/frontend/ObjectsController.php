<?php

	class ObjectsController extends Controller
	{
		public function actionSearch()
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.search.css');
			$Objects = Objects::model()->findAll();
		
			$this -> render('search', array(
				'Objects'	=> $Objects
			));
		}
		
		public function actionView($alias)
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/objects.view.css');
		
			$Object = Objects::model()->find("alias=:alias", array("alias" => $alias));
			$this -> render('view', array(
				'Object'	=> $Object
			));
		}
	}