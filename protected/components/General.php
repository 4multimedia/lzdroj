<?php

	class General
	{
		public function ClearLink($link)
		{
			$link = mb_strtolower($link, 'utf-8');
			
			$array = array(
				' ' => '-',
				' - ' => '-',
				'\'' => '',
				', ' => '-',
				',' => '-',
				'(' => '',
				')' => '',
				'à' => 'a',
				'î' => 'i',
				'ü' => 'u',
				'é' => 'e',
				'è' => 'e',
				'.' => '-',
			);
			
			$link = strtr($link, $array);
			if (substr($link, strlen($link) - 1, 1) == "-") { $link = substr($link, 0, strlen($link) - 1); }
			return $link;
		}
		
		public function myKey()
		{
			$session = Yii::app()->request->cookies['myKey']->value;
			if ($session == "")
			{
				$session = sha1(md5(time()));
				
				$cookie = new CHttpCookie('myKey', $session);
				$cookie->expire = time()+(3600*24*7); 
				Yii::app()->request->cookies['myKey'] = $cookie;
			}
			return $session;
		}
		
	}