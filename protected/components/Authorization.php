<?php

	class Authorization extends CBehavior
	{
		public function __construct()
		{
			Yii::app()->setLanguage('en');
		
			$email = $_POST["email"];
			$password = $_POST["password"];
			$logged = $_POST["logged"];
			$rememberMe = $_POST["rememberMe"];
			
			if ($_POST)
			{
				if ($email AND $password AND $logged == 1)
				{
					Users::login($email, $password);
					if (Yii::app()->session['logged'] != true)
					{
						Yii::app() -> user -> setFlash('danger', 'Podany adres e-mail lub hasło są błędne');
					}
				}
			}
			
			$adminPath = Yii::app()->params['adminPath'];
			$loginPath = Yii::app()->params['loginPath'];
			$resetPath = Yii::app()->params['resetPath'];
			
			$url = Yii::app()->request->url;
			if (substr($url, 0, 1) == "/") { $url = substr($url, 1, strlen($url)); } 
			$url_params = explode("/", $url);
		
			if (Yii::app()->session['logged'] != true)
			{
				if ($url_params[0] == $adminPath)
				{
					if ($url_params[1] != $loginPath AND $url_params[1] != $resetPath)
					{
						Yii::app()->request->redirect("/$adminPath/$loginPath");
					}
				}
			}
			
			if (Yii::app()->session['logged'] == true AND $url_params[0] == $adminPath AND ($url_params[1] == $loginPath OR $url_params[1] == $resetPath))
			{
				Yii::app()->request->redirect("/$adminPath/index");
			}
		}
		
		public function attach($owner)
		{

		}
		
		public function handleBeginRequest($event)
		{

		}
	}