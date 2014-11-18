<?php

	class UserController extends Controller
	{
		public $breacrumbs = array();
		public $layouts;
		
		public function actionLogin()
		{
			$this -> layout = 'page';
			$this -> pageTitle = "Logowanie";
			$this -> render('login');
		}
		
		public function actionRegistration()
		{
			$breadcrumbs[""] = "Rejestracja";
			$this -> breacrumbs = $breadcrumbs;
		
			$this -> layout = 'page';
			$this -> pageTitle = "Rejestracja";
			$this -> render('registration');
		}
		
	}