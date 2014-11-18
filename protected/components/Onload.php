<?php

	class Onload extends CBehavior
	{
		public function __construct()
		{
			if (isset($_GET["lang"]))
			{
				Yii::app()->session['CmsLang'] = $_GET["lang"];
			}
			
			$DefaultLang = Yii::app()->language;
			$ActiveLang = Yii::app()->session['CmsLang'];
			if (!$ActiveLang) { $ActiveLang = $DefaultLang; }
			
			Yii::app()->setLanguage($ActiveLang);
		
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
                // set the event callback
                $owner->attachEventHandler('onBeginRequest', array($this, 'beginRequest'));
        }

        /**
         * This method is attached to the 'onBeginRequest' event above.
         **/
        public function beginRequest(CEvent $event)
        {
        	$url = Yii::app()->request->url;
        	if (substr($url, 0, 1) == "/") { $url = substr($url, 1, strlen($url)); }
        	
        	$params = explode("/", $url);
        	if (LanguagesData::model()->findData($params[0], "products", "1", "alias", "value", "record_id"))
			{
        		$rule = array('<alias:'.$params[0].'>' => 'products/categories');
				$urlManager = Yii::app()->getUrlManager();
				$urlManager->addRules($rule);
			}
        }
	}