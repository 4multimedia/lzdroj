<?php

	class Users
	{
		public function init()
		{
			
		}
	
		public function logged()
		{
			return Yii::app()->session['logged'];
		}
		
		public function userID()
		{
			return Yii::app()->session['userID'];
		}
		
		public function codePass($password)
		{
			return sha1(md5($password));
		}	
		
		public function login($email, $password)
		{
			$password = Users::codePass($password);
		
			$sql = "SELECT * FROM user u WHERE `email` = '$email' AND `password` = '$password' AND `active` = '1'";
			$rows = Yii::app()->db->createCommand($sql)->queryAll();
			$count = count($rows);
			
			if ($count == 0)
			{
				Yii::app()->session['logged'] = false;
				Yii::app()->session['userID'] = -1;
				
				Users::setAction($userID, 12);
				return false;
			}
			else
			{
				$userID = $rows[0]["id"];
				Yii::app()->session['logged'] = true;
				Yii::app()->session['userID'] = $userID;
				
				Users::setAction($userID, 10);
				return true;
			}
		}
		
		public function logout()
		{
			$userID = Yii::app()->session['userID'];
			Users::setAction($userID, 15);
			
			Yii::app()->session['logged'] = false;
			Yii::app()->session['userID'] = -1;
			
			$adminPath = Yii::app()->params['adminPath'];
			$loginPath = Yii::app()->params['loginPath'];
			
			Yii::app()->request->redirect("/$adminPath/$loginPath");
		}
		
		public function setAction($UserID, $ActionID)
		{
			$ip = $_SERVER['REMOTE_ADDR'];
			$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				
			$insertAction = "INSERT INTO `user_action` SET `user_id` = '$UserID', `action_id` = '$ActionID', `date` = NOW(), `ip` = '$ip', `host` = '$host'";
			Yii::app()->db->createCommand($insertAction)->execute();
		}
		
		public function lastLogin()
		{
			$userID = Yii::app()->session['userID'];
			$sql = "SELECT * FROM user_action WHERE user_id = '$userID' AND action_id = '10' ORDER BY date DESC LIMIT 1,1";
			$rows = Yii::app()->db->createCommand($sql)->queryAll();
			$count = count($rows);
			
			if ($count == 0)
			{
				return false;
			}
			else
			{
				return $rows[0]["date"];
			}
		}
		
		public function info($field = false)
		{
			$userID = Yii::app()->session['userID'];
			$sql = "SELECT * FROM user u WHERE `id` = '$userID'";
			$rows = Yii::app()->db->createCommand($sql)->queryAll();
			$count = count($rows);
			
			if ($count == 0)
			{
				return false;
			}
			else
			{
				$array["name"] = $rows[0]["name"];
				$array["lastname"] = $rows[0]["lastname"];
				$array["email"] = $rows[0]["email"];
				$array["group_id"] = $rows[0]["group_id"];
				$array["last_login"] = self::lastLogin();
			
				if ($field)
				{
					return $array[$field];
				}
				else
				{
					return $array;
				}
			}
		}
	}