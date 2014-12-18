<?php

	class ArticlesController extends Controller
	{
		public function actionView($alias)
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/articles.view.css');
		
			$this -> render('view');
		}
	}