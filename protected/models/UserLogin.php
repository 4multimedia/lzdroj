<?php

	class UserLogin extends CFormModel
	{
		public $email;
		public $password;
		
		public function attributeLabels()
		{
			return array(
				'email'			=> 'Adres e-mail',
				'password'		=> 'Hasło',
			);
		}
		
		public function rules()
		{
			return array(
				array('email, password', 'required'),
				array('email', 'email'),
				array('password', 'length', 'min'=>6, 'max'=>40),
			);
		}
	}