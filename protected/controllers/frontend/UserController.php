<?php

	class UserController extends Controller
	{
		public $breacrumbs = array();
		public $layouts;
		
		public function actionLogin()
		{
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/login.form.css');
			
			$UserRegistration = new UserRegistration;
			$UserLogin = new UserLogin;
			$UserRemind = new UserRemind;
			
			if(isset($_POST['UserRegistration']))
			{
				$UserRegistration -> attributes = $_POST['UserRegistration'];
				if($UserRegistration->validate())
				{
					$User = new User;
					$User -> date = date("Y-m-d H:i:s");
					$User -> name = $_POST['UserRegistration']["name"];
					$User -> lastname = $_POST['UserRegistration']["lastname"];
					$User -> email = $_POST['UserRegistration']["email"];
					$User -> password = Users::codePass($_POST['UserRegistration']["password"]);
					$User -> save();
					
					Yii::app()->user->setFlash('success','Na podany adres e-mail "'.$_POST['UserRegistration']["email"].'" została wysłana wiadomość z linkiem aktywacyjnym.<br>Odbierz pocztę i postępuj według instrukcji zawartych w treści wiadomości');
					$this->refresh();
				}
			}
			
			if(isset($_POST['UserLogin']))
			{
				$UserLogin -> attributes = $_POST['UserLogin'];
				if($UserLogin->validate())
				{
					if (!Users::login($_POST['UserLogin']["email"], $_POST['UserLogin']["password"]))
					{
						Yii::app()->user->setFlash('error','Adres e-mail lub hasło są niepoprawne. Sprawdź dane i spróbuj ponownie');
					}
				}
			}
			
			if(isset($_POST['UserRemind']))
			{
				$UserRemind -> attributes = $_POST['UserRemind'];
				if($UserRemind->validate())
				{
					$Count = User::model()->count("email=:email AND active=1", array("email" => $_POST['UserRemind']["email"]));
					if ($Count == 0)
					{
						Yii::app()->user->setFlash('error','Podany adres e-mail nie jest zarejestrowany lub nie został aktywowany');
					}
					else if ($Count == 1)
					{
						Yii::app()->user->setFlash('success','Na podany adres e-mail "'.$_POST['UserRemind']["email"].'" została wysłana wiadomość z linkiem do odzyskania hasła.<br>Odbierz pocztę i postępuj według instrukcji zawartych w treści wiadomości');
						$this->refresh();
					}
				}
			}
			
		
			$this -> pageTitle = "Logowanie";
			$this -> render('login', array(
				'UserRegistration'		=> $UserRegistration,
				'UserLogin'				=> $UserLogin,
				'UserRemind'			=> $UserRemind
			));
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