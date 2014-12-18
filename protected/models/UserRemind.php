<?php

	class UserRemind extends CFormModel
	{
		public $email;
		
		public function attributeLabels()
		{
			return array(
				'email'			=> 'Adres e-mail',
			);
		}
		
		public function rules()
		{
			return array(
				array('email', 'required'),
				array('email', 'email'),
			);
		}
	}