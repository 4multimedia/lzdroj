<?php

	class UserRegistration extends CFormModel
	{
		public $name;
		public $lastname;
		public $email;
		public $password;
		public $repassword;
		public $rules;
		
		public function attributeLabels()
		{
			return array(
				'name'			=> 'Imię',
				'lastname'		=> 'Nazwisko',
				'email'			=> 'Adres e-mail',
				'password'		=> 'Hasło',
				'repassword'	=> 'Powtórz hasło',
			);
		}
		
		public function rules()
		{
			return array(
				array('name, lastname, email, password, repassword', 'required'),
				array('email', 'email'),
				array('password, repassword', 'length', 'min'=>6, 'max'=>40),
				array('password', 'compare', 'compareAttribute'=>'repassword'),
				array('email', 'unique', 'attributeName' => 'email', 'className' => 'User'),
				array('rules', 'required', 'requiredValue' => 1, 'message' => 'Zapoznaj się z regulaminem serwisu'),
			);
		}
	}